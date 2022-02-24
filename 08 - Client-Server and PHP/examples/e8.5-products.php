<?php
// added to allow AJAX calls from different host names
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

// array of product information
$inventory = [
    [
        "id" => "c1019e98-491f-11ec-81d3-0242ac130003",
        "name" => "Apple",
        "inventory" => "1.1,2.0,0.7,1.1",
        "description" => "An apple is an edible fruit produced by an apple tree (Malus domestica). Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus.",
        "file" => "apple.jpg"
    ],
    [
        "id" => "d05347de-491f-11ec-81d3-0242ac130003",
        "name" => "Banana",
        "inventory" => "2.1,3.0,4.7,3.1,3.5",
        "description" => "A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa.",
        "file" => "banana.jpg"
    ],
    [
        "id" => "d05349fa-491f-11ec-81d3-0242ac130003",
        "name" => "Cherry",
        "inventory" => "6.1,4.0,2.7,3.1,18.9,3.0",
        "description" => "A cherry is the fruit of many plants of the genus Prunus, and is a fleshy drupe (stone fruit)",
        "file" => "cherry.jpg"
    ],
    [
        "id" => "d0534aea-491f-11ec-81d3-0242ac130003",
        "name" => "Grapes",
        "inventory" => "1.1,2.0,0.7,1.1",
        "description" => "A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis.",
        "file" => "grapes.jpg"
    ],
    [
        "id" => "d0534d4c-491f-11ec-81d3-0242ac130003",
        "name" => "Orange",
        "inventory" => "1.1,2.0,0.7,1.1",
        "description" => "The orange is the fruit of various citrus species in the family Rutaceae (see list of plants known as orange); it primarily refers to Citrus sinensis, which is also called sweet orange, to distinguish it from the related Citrus aurantium, referred to as bitter orange.",
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