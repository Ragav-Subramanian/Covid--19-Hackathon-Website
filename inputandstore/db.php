<?php
$host = "localhost";
$dbUsername = "root";
$dbpassword = "Meiven212!";
$dbname = "ptb";

$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);

if (mysqli_connect_error()) 
{
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
?>