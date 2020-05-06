<?php
if(isset($_POST['signup']))
{
  require '../inputandstore/db.php';
  $name= $_POST['username'];
  $passwd= $_POST['password'];
  $rpasswd= $_POST['re-password'];
  if(empty($name) || empty($passwd) || empty($rpasswd))
    {
      exit(header("Location:../register_temp.php?error=sempty"));
    }
  else if($passwd !== $rpasswd)
    {
    	exit(header("Location:../register_temp.php?error=smismatch&sname=".$name));
    }
   else
    {
      $sql="SELECT name FROM users WHERE name=?";
      $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql))
      {
       exit(header("Location:../register_temp.php?error=sdberror"));
      }
      else
      {
      	mysqli_stmt_bind_param($stmt, "s", $name);
      	mysqli_stmt_execute($stmt);
      	mysqli_stmt_store_result($stmt);
      	$row=mysqli_stmt_num_rows($stmt);
      	if($row>0)
      	{
        exit(header("Location:../register_temp.php?error=susralrdy"));
      	}
      	else
      	{
      		$hashpasswd= password_hash($passwd, PASSWORD_DEFAULT);
      		$sql="INSERT INTO users (name, pwd) VALUES (?, ?)";
      		if(!mysqli_stmt_prepare($stmt, $sql))
      		{
      		exit(header("Location:../register_temp.php?error=sdberror"));
      		}
      		mysqli_stmt_bind_param($stmt, "ss", $name, $hashpasswd);
      	  mysqli_stmt_execute($stmt);
      	  exit(header("Location:../index.php?signup=successful"));
        }
      }
    }
 mysqli_stmt_close($stmt);
 mysqli_close($conn);
}
else
{
  	exit(header("Location:../index.php"));
}
?>