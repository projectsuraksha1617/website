<?php
$adhaar=$_POST["adhaar"];
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$ad1=$_POST["Ad1"];
$ad2=$_POST["Ad2"];
$contact=$_POST["contact"];
$mysql=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha") or die("Can't connect to DB");
if($fname != "")
{
$query="update cops set First_Name='".$fname."' where Adhaar_No='".$adhaar."'";
$res=mysqli_query($mysql,$query);
}
if($mname != "")
{
$query="update cops set Middle_Name='".$mname."' where Adhaar_No='".$adhaar."'";
$res=mysqli_query($mysql,$query);
}
if($lname != "")
{
$query="update cops set Last_Name='".$lname."' where Adhaar_No='".$adhaar."'";
$res=mysqli_query($mysql,$query);
}
if($email != "")
{
$query="update cops set E_mail='".$email."' where Adhaar_No='".$adhaar."'";
$res=mysqli_query($mysql,$query);
}
if($ad1 != "")
{
$query="update cops set Address_Line1='".$ad1."' where Adhaar_No='".$adhaar."'";
$res=mysqli_query($mysql,$query);
}
if($ad2 != "")
{
$query="update cops set Address_Line2='".$ad2."' where Adhaar_No='".$adhaar."'";
$res=mysqli_query($mysql,$query);
}
if($contact != "")
{
$query="update cops set Mobile_Number='".$contact."' where Adhaar_No='".$adhaar."'";
$res=mysqli_query($mysql,$query);
}

if($res==true)
{
echo "<script type='text/javascript'>
alert(\"Updated successfully\");window.location=\"update_cop.php\";
</script>";
}
else
{
echo "<script type='text/javascript'>
alert(\"Failed to update ypur profile\");window.location=\"update_cop.php\";
</script>";
}	 
mysqli_close($mysql);
?>
