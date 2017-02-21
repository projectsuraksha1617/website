<?php
$fname=$_POST["fname"];
$mname=$_POST["mname"];
$lname=$_POST["lname"];
$adhaar=$_POST["adhaar"];
$email=$_POST["email"];
$pwd=$_POST["password"];
$cpwd=$_POST["confirm"];
$ad1=$_POST["Address1"];
$ad2=$_POST["Address2"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$dob=$_POST["date"];
$contact=$_POST["mobile"];
$photo=$_POST["image"];
$cap=$_POST["captcha"];
$mysql=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha") or die("Can't connect to DB");
$query="insert into user(First_Name,Middle_Name,Last_Name,Adhaar_No,E_mail,Create_Password,Confirm_Password,Address_Line1,Address_Line2,City,State,Postal_Code,Date_of_Birth,Mobile_Number,Photo,captcha) values('".$fname."','".$mname."','".$lname."','".$adhaar."','".$email."','".$pwd."','".$cpwd."','".$ad1."','".$ad2."','".$city."','".$state."','".$zip."','".$dob."','".$contact."','".$photo."','".$cap."')";
mysqli_query($mysql,$query) or die("error in inserting".mysqli_error($mysql)); 
$to= $email;
$subject="Activation of account";
$message="
<html>
<head>
<title>Activation of account</title>
</head>
<body>
<p> Please Click on blelow link to activate your account </p>
<a href='http://simunet.in/verifyemail.php?email=$email'>Click here</a>
</body>
</html>
";
$headers="MIME-Version:1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8". "\r\n";

$headers .= 'From: <simuneti@simunet.in>' . "\r\n";

$mail=mail($to,$subject,$message,$headers);
if($mail==true){
echo "Please Check your email";
}
mysqli_close($mysql);
?>
