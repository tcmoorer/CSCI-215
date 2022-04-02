<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    $userName = $_POST["userName"];
    $userEmail = $_POST["userEmail"];
    $userComments = $_POST["userComments"];

    $id = uniqid();
    $formInfo = [ 'id' => $id, 'name' => $userName, 'email' => $userEmail, 'comments' => $userComments ];

    echo json_encode($formInfo);

?>