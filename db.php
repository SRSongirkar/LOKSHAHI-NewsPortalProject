<?php

    $conn = mysqli_connect("localhost","root","","newsportal");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


?>