<?php
session_start();
  if(isset($_SESSION['NAME']))
  {
  header("Location:profile.php?login=success");
  exit();
  }
  else
  {
    require("../index1.html"); 
  }
 // ob_end_flush();
?>