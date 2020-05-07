<?php
include_once("../phpfiles/db.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno= $_POST['mobileno'];
$query = $_POST['query'];
$gender = $_POST['gender'];


$INSERT = "INSERT INTO complaints (name, email, mobileno, query, gender,) VALUES(?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("ssiss", $name, $email, $mobileno, $query, $gender);
$stmt->execute();
echo "New record inserted sucessfully";
$stmt->close();

}
else 
{
    session_abort();
    echo "Insecured method";
}
?>
simple.php
display simple.php.