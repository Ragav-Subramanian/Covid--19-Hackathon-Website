<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $inAccount = $_POST["account"];
    $inReason =$_POST["reason"] ;
    $inEmail = $_POST["email"];
    $inName = $_POST["name"];
    $inPassword = $_POST["password"];
    $inVehicle_Number = $_POST["vnum"];
    $inNo_Of_Days = $_POST["nofdays"];
    $inGender = $_POST["gender"];

    echo "Input given for Account : " . $inAccount;
    echo "<br>";
    echo "Input given for Reason : " . $inReason;
    echo "<br>";
    echo "Input given for Email : " . $inEmail;
    echo "<br>";
    echo "Input given for Name : " . $inName;
    echo "<br>";
    echo "Input given for Password : " . $inPassword;
    echo "<br>";
    echo "Input given for Vehicle Number : " . $inVehicle_Number;
    echo "<br>";
    echo "Input given for No of  Days : " . $inNo_Of_Days ;
    echo "<br>";
    echo "Input given for Gender : " . $inGender;
}

?>
