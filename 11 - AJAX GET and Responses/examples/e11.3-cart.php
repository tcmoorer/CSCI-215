<?php
// added to allow AJAX calls from different host names
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

// array of cart information
$cart = [
    [
        "id" => "d05347de-491f-11ec-81d3-0242ac130000",
        "name" => "Apple",
        "unitPrice" => 1.99,
        "quantity" => 20
    ],
    [
        "id" => "d0534aea-491f-11ec-81d3-0242ac130003",
        "name" => "Grapes",
        "unitPrice" => .59,
        "quantity" => 32
    ],
    [
        "id" => "d0534d4c-491f-11ec-81d3-0242ac130004",
        "name" => "Orange",
        "unitPrice" => .39,
        "quantity" => 49
    ]
];

echo json_encode($cart);

?>