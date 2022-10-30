<?php
session_start();
// DB connection
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "api";

$connect = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);


// Check connection
if (!$connect) {
    die("connection failed: " . mysqli_connect_error());
}

// else {
//     echo " Connection successful";
// }