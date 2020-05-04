<?php
include_once("db.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$id = $_POST['id'];
$patientname = $_POST['patientname'];
$gender = $_POST['sex'];
$age = $_POST['age'];
$adt = $_POST['adt'];
$btemp = $_POST['btemp'];
$bsl= $_POST['bsl'];
$diagnised = $_POST['diagnised'];
$oill = $_POST['oill'];

$INSERT = "INSERT INTO patientdb (id, patientname, gender, age, adt, btemp, bsl, diagnised, oill) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("issisiiis", $id, $patientname, $gender, $age,$adt, $btemp, $bsl,  $diagnised, $oill);
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
