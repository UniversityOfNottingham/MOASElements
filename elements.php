<?php

$elementSetMetadata = array(
    'name'        => "MOAS Elements",
    'description' => "Elements required for MOAS functionality",
    'record_type'   => null
);
$elements = array(
    array(
        'name'          => "Alternative Item Tag",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion.",
        'order'         => 2
    ),
    array(
        'name'          => "Artist",
        'description'   => "The artist involved in the creation of the item. This is used to provide 'More by this artist' functionality",
        'order'         => 3
    ),
    array(
        'name'          => "Geo Location",
        'description'   => "The Latitude and Longitude pair related to the item, comma separated. E.g. '53.2342, 0.2343'",
        'order'         => 4
    ),
    array(
        'name'          => "Map Zoom Level",
        'description'   => "The zoom level for the item map, where '1' is global, '10' would show a large city and '18' is street level.",
        'order'         => 5
    ),
    array(
        'name'          => "Organisation",
        'description'   => "The organisation responsible for this item.",
        'order'         => 6
    ),
    array(
        'name'          => "Related Item Tag",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion.",
        'order'         => 7
    ),
    array(
        'name'          => "Theme",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion.",
        'order'         => 8
    ),
    array(
        'name'          => "Download Rights",
        'description'   => "The download rights for this item.",
        'order'         => 9
    ),
    array(
        'name'          => "Download Contact",
        'description'   => "An email address or URL for the item owner.",
        'order'         => 10
    ),
    array(
        'name'          => "Funding Body",
        'description'   => "The organisation that funded this item.",
        'order'         => 11,
    ),
    array(
        'name'          => "URL Slug",
        'description'   => "Slug to use for short URL's. Enter your own or generate one based on the items title.",
        'order'         => 1
    ),
);
