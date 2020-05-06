<!-- File for whole redirects -->

<?php
  if(isset($_SESSION['NAME']))
  {
  header("Location:profile.php?login=success");
  exit();
  }
  else
  {
    require 'index1.html'; 
  }
?>