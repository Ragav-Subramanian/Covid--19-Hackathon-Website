<?php
$host = "localhost";
$dbUsername = "id13520606_doctpat";
$dbpassword = "BAemCn|)|qTU83xE";
$dbname = "id13520606_covid19";

$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);

if (mysqli_connect_error()) 
{
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
?>