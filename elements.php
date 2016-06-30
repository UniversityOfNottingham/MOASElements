<?php

$elementSetMetadata = array(
    'name'        => "MOAS Elements",
    'description' => "Elements required for MOAS functionality",
    'record_type'   => null
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
        'name'          => "Map Zoom Level",
        'description'   => "The zoom level for the item map, where '1' is global, '10' would show a large city and '18' is street level."
    ),
    array(
        'name'          => "Organisation",
        'description'   => "The organisation responsible for this item."
    ),
    array(
        'name'          => "Related Item Tag",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion."
    ),
    array(
        'name'          => "Theme",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion."
    ),
    array(
        'name'          => "Download Rights",
        'description'   => "The download rights for this item."
    ),
    array(
        'name'          => "Download Contact",
        'description'   => "An email address or URL for the item owner."
    ),
    array(
        'name'          => "Funding Body",
        'description'   => "The organisation that funded this item."
    ),
    array(
        'name'          => "URL Slug",
        'description'   => "Slug to use for short URL's"
    )
);
