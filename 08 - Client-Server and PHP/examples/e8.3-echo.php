<?php
    foreach($_POST as $key => $value){
        print "{$key}: \"{$value}\"<br>";
    }
    foreach($_GET as $key => $value){
        print "{$key}: \"{$value}\"<br>";
    }
?>