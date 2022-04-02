<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');
    
    $paintColor = $_POST["paintColor"];
    $paintQuantity = $_POST["paintQuantity"];

    $id = uniqid();
    $formInfo = [ 'id' => $id, 'color' => $paintColor, 'qty' => $paintQuantity ];

    echo json_encode($formInfo);

?>