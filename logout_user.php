<?php
session_start();
session_destroy();
$_SESSION['adhaar']=FALSE;
header("Location:user.html");
exit;
?>
