<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    $str = '<h1>Ajax Info</h1>';
    $str .= '<h2>This info was provided by the ajax_info.php file</h2>';
    echo $str;
?>