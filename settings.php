<?php
//file name: settings.php
//Title:Build your own Forgot Password PHP Script
function connect()
{	
$host="localhost"; //host
$uname="simuneti_meghana";  //username
$pass="Projectsuraksha@2017";      //password
$db= 'simuneti_suraksha';  //database name

$con = mysql_connect($host,$uname,$pass);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($db, $con);
}
?>
