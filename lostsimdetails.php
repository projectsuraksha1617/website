<?php
$type=$_POST["type"];
$name=$_POST["name"];
$mob=$_POST["mob"];
$location=$_POST["location"];
$mode=$_POST["mode"];
$service=$_POST["service"];
if($_POST["severity"]!="")
{
$severity=$_POST["severity"];
}
else
{
$severity="Low";
}

$mysql=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha") or die("Can't connect to DB");
$query="insert into lostsim(Case_Type,Name,Mobile,Lost_Location,Mode_of_Losing,Service_Provider,Severity) values('".$type."','".$name."','".$mob."','".$location."','".$mode."','".$service."','".$severity."')";
$res=mysqli_query($mysql,$query);
if($res==true)
{
echo "<script type=\"text/javascript\">
alert(\" Registered complaint successfully\");
window.location=\"lostsim.php\";
</script>";
}
else
{
echo "<script type=\"text/javascript\">
alert(\" Couldnt register complaint successfully\");
window.location=\"lostsim.php\";
</script>";
}
mysqli_close($mysql);
?>
