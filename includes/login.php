<?php
function callback($buffer) {
  return (ereg_replace("apples", "oranges", $buffer));
}
ob_start("callback");
if(isset($_POST['login']))
{
  require '../phpfiles/db.php';
  $name= $_POST['username'];
  $passwd= $_POST['password'];
  if(empty($name) || empty($passwd))
    {
      header("Location:../phpfiles/login_temp.php?error=lempty");
      exit();
    }
  else
  {
  	$sql="SELECT * FROM users WHERE name=?";
  	$stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
     header("Location:../phpfiles/login_temp.php?error=ldberror");
     exit();	
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
               header("Location:../phpfiles/index.php?success=welcome");
               exit();
           }
         else
           {
            	header("Location:../phpfiles/login_temp.php?error=lmismatch");
                exit();
           }     
        }
        else
        {
       	header("Location:../phpfiles/login_temp.php?error=lnousr");
        exit();
        }
    }
  }
}
else
{
  header("Location:../phpfiles/index.php");
  exit();
}
ob_end_flush();
?>