<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    // simple person 'object'
    $person =  [
        'firstName' => 'Chris',
        'lastName' => 'Rock',
        'occupation' => 'comedian',
        'age' => 57,
        'born' => 'Andrews, SC'
    ];

    // return response
    echo json_encode($person);
?>