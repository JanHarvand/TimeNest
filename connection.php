<?php

    $database= new mysqli("localhost","root","","timenest");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>