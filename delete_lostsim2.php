<?php
$case=$_POST["case"];
$name=$_POST["name"];
$mobile=$_POST["mobile"];
$loc=$_POST["loc"];
$sev=$_POST["sev"];
$mysql=mysqli_connect("simunet.in","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha") or die("can't connect to DB");
$query="DELETE from lostsim2 where Case_Type='$case' AND Name='$name' AND Mobile='$mobile' AND Lost_Location='$loc' AND Severity='$sev'";
$res=mysqli_query($mysql,$query);
if($res==true){

	echo "<script type=\"text/javascript\">
	alert(\" Case Completed. Please Check!!\");
	window.location=\"completed.php\";
	</script>";

}  
else{

	echo "<script type=\"text/javascript\">
	alert(\" Case could not be handled.
		Err!! Row could not be deleted... Please Check!!\");
	window.location=\"active_cases.php\";
	</script>";
}
?>