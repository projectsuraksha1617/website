<?php
$type=$_POST["case"];
$name=$_POST["name"];
$mob=$_POST["mobile"];
$loc=$_POST["loc"];
$severity=$_POST["sev"];
$mysql=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha") or die("can't connect to DB");
$query="insert into lostsim2(Case_type,Name,Mobile,Lost_Location,Severity) values('".$type."','".$name."','".$mob."','".$loc."','".$severity."')";
$res=mysqli_query($mysql,$query);
if($res==true){
	include "delete_lostsim1.php";
	
	
}  
else{
echo "<script type=\"text/javascript\">
	alert(\" Case could not be handled
		Err!! Row couldnt be inserted. Please Check!!\");
	window.location=\"pending.php\";
	</script>";

}

?>