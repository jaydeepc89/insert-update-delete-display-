<?php 
session_start();
session_unset();
session_destroy();
setcookie("emails","", time() - (86400  * 10));
header("location:index.php");
?>