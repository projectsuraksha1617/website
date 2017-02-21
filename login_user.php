<?php
session_start();
if(isset($_POST["submit"]))
{
$adhaar=$_POST['adhaar'];
$pass=$_POST['password'];
$checkbox=isset($_POST['keep']);
$link=mysqli_connect("simunet.in","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha");
$res=mysqli_query($link,"select * from user where Adhaar_No='".$adhaar."' and Confirm_Password='".$pass."'");
if($row=mysqli_fetch_array($res))
{
$_SESSION['adhaar']=$row["Adhaar_No"];
echo "<script type='text/javascript'>window.location=\"user1_dash.php\";</script>";
}
else
{
echo "<script type='text/javascript'>
alert(\"Incorrect AdhaarNo or Password\");window.location=\"user.html\";
</script>";
}
}
?>