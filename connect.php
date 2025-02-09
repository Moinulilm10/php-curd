<?php

$con  = mysqli_connect("localhost", "root", "123456789", "php_crud");

if ($con) {
    echo "Connected successfully";
} else {
    die("Connection failed: " . mysqli_connect_error($con));
}
