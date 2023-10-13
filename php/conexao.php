<?php

    $conn = new PDO("mysql:dbname=dbinvativos; host=localhost", "root", "root");

    if($conn->connect_error) {
        echo "Error: " . $conn->connect_error;
    }

?>