<?php

$elementSetMetadata = array(
    'name'        => "MOAS Elements",
    'description' => "Elements required for MOAS functionality",
    'record_type' => "Item"
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
        'name'          => "Country",
        'description'   => "The country of origin for this item.",
        'order'         => 4
    ),
    array(
        'name'          => "Geo Location",
        'description'   => "The Latitude and Longitude pair related to the item, comma separated. E.g. '53.2342, 0.2343'",
        'order'         => 5
    ),
    array(
        'name'          => "Map Zoom Level",
        'description'   => "The zoom level for the item map, where '1' is global, '10' would show a large city and '18' is street level.",
        'order'         => 6
    ),
    array(
        'name'          => "Organisation",
        'description'   => "The organisation responsible for this item.",
        'order'         => 7
    ),
    array(
        'name'          => "Related Item Tag",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion.",
        'order'         => 8
    ),
    array(
        'name'          => "Theme",
        'description'   => "This allows MOAS to provide related items in appropriate places by showing items tagged in a similar fashion.",
        'order'         => 9
    ),
    array(
        'name'          => "Download Rights",
        'description'   => "The download rights for this item.",
        'order'         => 10
    ),
    array(
        'name'          => "Download Contact",
        'description'   => "An email address or URL for the item owner.",
        'order'         => 11
    ),
    array(
        'name'          => "Funding Body",
        'description'   => "The organisation that funded this item.",
        'order'         => 12
    ),
    array(
        'name'          => "URL Slug",
        'description'   => "Slug to use for short URL's. Enter your own or generate one based on the items title.",
        'order'         => 1
    ),
    array(
        'name'          => "Common Name",
        'description'   => "The commonly used name for the fish species, e.g. Cod etc.",
        'order'         => 13
    ),
    array(
        'name'          => "Latin Name",
        'description'   => "The full Latin name for the fish species.",
        'order'         => 14
    ),
    array(
        'name'          => "Genus",
        'description'   => "The Latin family name for the fish genus.",
        'order'         => 15
    ),
    array(
        'name'          => "Environment",
        'description'   => "The type of water the fish is found in.",
        'order'         => 16
    ),
    array(
        'name'          => "Behaviour",
        'description'   => "Migratory behaviour.",
        'order'         => 17
    ),
    array(
        'name'          => "Habitat",
        'description'   => "Which part of the water the fish lives in.",
        'order'         => 18
    ),
    array(
        'name'          => "Distribution",
        'description'   => "The regions of the world where the fish are commonly found.",
        'order'         => 19
    ),
    array(
        'name'          => "Bone",
        'description'   => "Which skeletal element (or bone) it is.",
        'order'         => 20
    ),
    array(
        'name'          => "Head or Body",
        'description'   => "Where the bone is found in the skeleton.",
        'order'         => 21
    ),
    array(
        'name'          => "Bone Location",
        'description'   => "Which skeletal region the bone is part of.",
        'order'         => 22
    ),
    array(
        'name'          => "Shape",
        'description'   => "",
        'order'         => 23
    ),
    array(
        'name'          => "Side",
        'description'   => "Which side of the fish the bone comes from.",
        'order'         => 24
    ),
    array(
        'name'          => "View",
        'description'   => "The angle from which the bone is being viewed in the image.",
        'order'         => 24
    ),
    array(
        'name'          => "Size",
        'description'   => "The size of the fish if known.",
        'order'         => 25
    ),
    array(
        'name'          => "Sex",
        'description'   => "The sex of the fish if known.",
        'order'         => 26
    ),
    array(
        'name'          => "Age",
        'description'   => "The age of the fish if known.",
        'order'         => 27
    ),
    array(
        'name'          => "Modification",
        'description'   => "Things that affect the integrity of the bone.",
        'order'         => 28
    ),
    array(
        'name'          => "Institution",
        'description'   => "Where the bones used in each image are held.",
        'order'         => 29
    )
);
