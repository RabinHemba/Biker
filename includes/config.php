<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "bikerental";
$conn = new mysqli($server,$user,$pass,$db_name);
if(!$conn)
{
    die("Connection failed" . $conn->connect_error());
}
?>