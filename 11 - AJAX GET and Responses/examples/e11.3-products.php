<?php
// added to allow AJAX calls from different host names
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

// array of product information
$inventory = [
    [
        "id" => "d05347de-491f-11ec-81d3-0242ac130000",
        "name" => "Apple",
        "description" => "An apple is an edible fruit produced by an apple tree (Malus domestica). Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus.",
        "unitPrice" => 1.99,
        "file" => "apple.jpg"
    ],
    [
        "id" => "d05347de-491f-11ec-81d3-0242ac130001",
        "name" => "Banana",
        "description" => "A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa.",
        "unitPrice" => .49,
        "file" => "banana.jpg"
    ],
    [
        "id" => "d05349fa-491f-11ec-81d3-0242ac130002",
        "name" => "Cherry",
        "description" => "A cherry is the fruit of many plants of the genus Prunus, and is a fleshy drupe (stone fruit)",
        "unitPrice" => 2.19,
        "file" => "cherry.jpg"
    ],
    [
        "id" => "d0534aea-491f-11ec-81d3-0242ac130003",
        "name" => "Grapes",
        "description" => "A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis.",
        "unitPrice" => .59,
        "file" => "grapes.jpg"
    ],
    [
        "id" => "d0534d4c-491f-11ec-81d3-0242ac130004",
        "name" => "Orange",
        "description" => "The orange is the fruit of various citrus species in the family Rutaceae (see list of plants known as orange); it primarily refers to Citrus sinensis, which is also called sweet orange, to distinguish it from the related Citrus aurantium, referred to as bitter orange.",
        "unitPrice" => .39,
        "file" => "orange.jpg"
    ]
];

// build the result depending on whether or not an id to a product is provided
$results = [];
if ($_GET['id']) {
    $id = $_GET['id'];
    foreach ($inventory as $item) {
        if ($id === $item['id']) {
            $results = $item;
        }
    }
} else {
    $results = $inventory;
}

echo json_encode($results);

?>