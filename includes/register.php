<?php
ob_start();
if(isset($_POST['signup']))
{
  require '../phpfiles/db.php';
  $name= $_POST['username'];
  $passwd= $_POST['password'];
  $rpasswd= $_POST['re-password'];
  if(empty($name) || empty($passwd) || empty($rpasswd))
    {
      header("Location:../phpfiles/register_temp.php?error=sempty");
      exit();
    }
  else if($passwd !== $rpasswd)
    {
    	header("Location:../phpfiles/register_temp.php?error=smismatch&sname=".$name);
    	exit();
    }
   else
    {
      $sql="SELECT name FROM users WHERE name=?";
      $stmt=mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql))
      {
       header("Location:../phpfiles/register_temp.php?error=sdberror");
    	exit();
      }
      else
      {
      	mysqli_stmt_bind_param($stmt, "s", $name);
      	mysqli_stmt_execute($stmt);
      	mysqli_stmt_store_result($stmt);
      	$row=mysqli_stmt_num_rows($stmt);
      	if($row>0)
      	{
        header("Location:../phpfiles/register_temp.php?error=susralrdy");
    	exit();
      	}
      	else
      	{
      		$hashpasswd= password_hash($passwd, PASSWORD_DEFAULT);
      		$sql="INSERT INTO users (name, pwd) VALUES (?, ?)";
      		if(!mysqli_stmt_prepare($stmt, $sql))
      		{
      		header("Location:../phpfiles/register_temp.php?error=sdberror");
    	    exit();	
      		}
      		mysqli_stmt_bind_param($stmt, "ss", $name, $hashpasswd);
      	  mysqli_stmt_execute($stmt);
      	  header("Location:../phpfiles/index.php?signup=successful");
    	    exit();
        }
      }
    }
 mysqli_stmt_close($stmt);
 mysqli_close($conn);
}
else
{
  	header("Location:../phpfiles/index.php");
    exit();
}
?>