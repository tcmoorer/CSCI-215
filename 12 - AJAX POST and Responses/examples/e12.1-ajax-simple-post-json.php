<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    // convert the POST body in JSON to a PHP object
    $content = file_get_contents("php://input");
    $paintInfo = json_decode($content, true);

    $id = uniqid();
    $formInfo = [ 'id' => $id, 'color' => $paintInfo['paintColor'], 'qty' => $paintInfo['paintQuantity'] ];

    echo json_encode($formInfo);

?>