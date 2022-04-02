<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    $content = file_get_contents("php://input");
    $cartInfo = json_decode($content, true);
    echo json_encode($cartInfo);

?>