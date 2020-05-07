
<?php
session_start();
session_unset();
session_destroy();
header("Location:../phpfiles/index.php?logout=successful");
?>