<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    $str = '<h1>Hello</h1>';
    echo $str;
?>