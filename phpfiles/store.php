<?php
include_once("../phpfiles/db.php");
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
$q1=$_POST['q1'];
$b=implode(',',$q1);
$q2=$_POST['q2'];
$c=implode(',',$q2);

$INSERT = "INSERT INTO patientdb (id, patientname, gender, age, adt, btemp, bsl, diagnised, oill, q1, q2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("issisiiisss", $id, $patientname, $gender, $age,$adt, $btemp, $bsl,  $diagnised, $oill, $b, $c);
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
store.php
Displaying store.php.