<?php

$elementSetMetadata = array(
    'name'        => "MOAS Elements",
    'description' => "Elements required for MOAS functionality",
    'record_type'   => "Item"
);
$elements = array(
    array(
        'name'          => "Alternative Item Tag",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion."
    ),
    array(
        'name'          => "Artist",
        'description'   => "The artist involved in the creation of the item. This is used to provide 'More by this artist' functionality",
    ),
    array(
        'name'          => "Geo Location",
        'description'   => "The Latitude and Longitude pair related to the item, comma separated. E.g. '53.2342, 0.2343'"
    ),
    array(
        'name'          => "Organisation",
        'description'   => "The organisation responsible for this item."
    ),
    array(
        'name'          => "Related Item Tag",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion."
    )
);
