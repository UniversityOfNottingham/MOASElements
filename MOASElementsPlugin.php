<?php

/**
 * @package     omeka
 * @subpackage  moas-elements
 * @copyright   2015 University of Nottingham
 * @license     Proprietary
 * @author      Adam Cooper <adam.cooper@nottingham.ac.uk>
 */

class MOASElementsPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'install',
        'uninstall',
        'uninstall_message'
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
        // global function (ick) that adds our metadata set.
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
}
