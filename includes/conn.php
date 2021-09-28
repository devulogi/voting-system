<?php

    $conn = new mysqli('localhost', 'root', '', 'votesystem');

    if ($conn->connect_error) {
        exit('Connection failed: '.$conn->connect_error);
    }
