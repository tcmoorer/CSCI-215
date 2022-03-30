<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    // receive parameters
    $target = $_GET["target"];
    $guess = $_GET["guess"];

    // evaluate
    if ($guess == $target){
        $data =  [
            'gameOver' => 'true',
            'message' => 'You guessed it!'
        ];
    } elseif($guess < $target){
        $data = [
            'gameOver' => 'false',
            'message' => 'Higher!'
        ];
    } else{
        $data = [
            'gameOver' => 'false',
            'message' => 'Lower!'
        ];
    }

    // return response
    echo json_encode($data);
?>