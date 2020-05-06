<?php
ob_start();
if(isset($_POST['login']))
{
  require '../inputandstore/db.php';
  $name= $_POST['username'];
  $passwd= $_POST['password'];
  if(empty($name) || empty($passwd))
    {
      exit(header("Location:../login_temp.php?error=lempty"));      
    }
  else
  {
  	$sql="SELECT * FROM users WHERE name=?";
  	$stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
     exit(header("Location:../login_temp.php?error=ldberror"));	
    }
    else
    {
    	mysqli_stmt_bind_param($stmt, "s", $name);
    	mysqli_stmt_execute($stmt);
    	$rows=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($rows))
        {
        $hashpwd=$row['pwd'];
        $result=password_verify($passwd, $hashpwd);
         if($result)
           {
               session_start();
               $_SESSION['NAME']=$row['name'];
               $_SESSION['PWD']=$row['pwd'];
               exit(header("Location:../index.php?success=welcome"));
           }
         else
           {
            	exit(header("Location:../login_temp.php?error=lmismatch"));
           }     
        }
        else
        {
       	 exit(header("Location:../login_temp.php?error=lnousr"));
        }
    }
  }
}
else
{
  exit(header("Location:../index.php"));
}
?>