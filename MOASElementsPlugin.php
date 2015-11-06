<?php

/**
 * @package     omeka
 * @subpackage  moas-elements
 * @copyright   2015 University of Nottingham
 * @license     MIT
 * @author      Adam Cooper <adam.cooper@nottingham.ac.uk>
 */

class MOASElementsPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'install',
        'uninstall',
        'uninstall_message',
        'upgrade'
    );

    public function __construct()
    {
        parent::__construct();

        // Get the data
        include 'elements.php';
        $this->_elements = $elements;
        $this->_elementSetMetadata = $elementSetMetadata;
    }

    /**
     * Install the plugin.
     */
    public function hookInstall()
    {
        insert_element_set($this->_elementSetMetadata, $this->_elements);
    }

    /**
     * Uninstall the plugin.
     */
    public function hookUninstall()
    {
        /** @var Table_ElementSet $elementSetTable */
        $elementSetTable = $this->_db->getTable('ElementSet');

        // deleting ElementSet also deletes any attached elements.

        $est = $elementSetTable->findByName($this->_elementSetMetadata['name']);
        if ($est !== null) {
            $est->delete();
        }
    }

    /**
     * Display the uninstall message.
     */
    public function hookUninstallMessage()
    {
        echo __('%sWarning%s: This will remove all the %s elements added '
            . 'by this plugin and permanently delete all element texts entered in those '
            . 'fields.%s', '<p><strong>', '</strong>', $this->_elementSetMetadata['name'], '</p>');
    }

    public function hookUpgrade($oldVersion, $newVersion)
    {
        switch($oldVersion)
        {
            // let the plugin cascade its upgrades
            case '1.0.0':
                // code to upgrade from 1.0.0 to 1.1.0
            default :
                $this->_updateElements();
        }
    }

    /**
     * Adds any elements that have been defined but are not present on the site.
     */
    private function _updateElements($remove = false)
    {
        // get database records.
        /** @var Table_ElementSet $elementSetTable */
        $elementSetTable = $this->_db->getTable('ElementSet');
        /** @var ElementSet $elementSet */
        $elementSet = $elementSetTable->findByName($this->_elementSetMetadata['name']);
        $elements = $elementSet->getElements();

        // walk the MOAS element array and add where needed.
        array_walk($this->_elements, function($element, $index) use (&$elementSet, $elements) {
            foreach ($elements as $dbElement) {
                if ($element['name'] === $dbElement->name) {
                    return;
                }
            }

            // if we get here it means we didn't find this element in the database.
            $elementSet->addElements(array($index => $element));
        });

        $elementSet->save();
    }
}
