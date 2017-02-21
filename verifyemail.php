<?php
$mysql=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha") or die("Can't connect to DB");
$email=$_GET["email"];
$code=$_GET["code"];
$query="SELECT * from cops where email='$email'";
$result=mysqli_query($mysql,$query);
while($row=mysqli_fetch_assoc($result)) {
	$dbcode = $row["confirmcode"];
}
if($dbcode==$code) {
	$aquery="UPDATE cops set confirmed='1'";
	$aresult=mysqli_query($mysql,$aquery);
    $bquery="UPDATE cops set confirmcode='0'";
	$bresult=mysqli_query($mysql,$bquery);
	echo "your account has been activated";}
	else {
		echo "sorry code doesnt match";
	}
?>