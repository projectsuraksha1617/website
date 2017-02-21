<?php
//file reset.php
//title:Build your own Forgot Password PHP Script
session_start();
$token=$_GET['token'];
include("settings.php");
connect();
if(!isset($_POST['password']))
{
$q="select email from tokens where token='".$token."' and used=0";
$r=mysqli_query($q);
while(mysqli_fetch_array($r,MYSQL_ASSOC))
{
$email=$_GET['email'];
   }
if ($email!=''){
          $_SESSION['email']=$email;
}
else die("Invalid link or Password already changed");}
$pass=$_POST['password'];
$email=$_SESSION['email'];
if(!isset($pass)){
echo '<form method="post">
enter your new password:<input type="password" name="password" />
<input type="submit" value="Change Password">
</form>
';}
if(isset($_POST['password'])&&isset($_SESSION['email']))
{
$q="update user set Create_Password='".($pass)."' and Confirm_Password='".($pass)."' where E_mail='".$email."'";
$r=mysqli_query($q);
if($r)mysqli_query("select tokens set used=1 where token='".$token."'");echo "Your password is changed successfully";
if(!$r)echo "An error occurred";
	}