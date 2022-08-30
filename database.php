<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$con = new mysqli( $host,$username, $password,$dbname);
                     
if ($con->connect_errno) {
    die("Connection error: " . $con->connect_error);
}

return $con;