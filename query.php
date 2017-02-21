<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$org=$_POST["org"];
$qry=$_POST["query"];

$mysql=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha") or die("Can't connect to DB");
$query="insert into queries(Name,E_mail,Phone,Organization,Query) values('".$name."','".$email."','".$phone."','".$org."','".$qry."')";
mysqli_query($mysql,$query) or die("error in inserting"); 
$to= $email;
$subject="Activation of account";
$message="
<html>
<head>
<title>Activation of account</title>
</head>
<body>
<p> Your Query has been successfully registered!</p>
</body>
</html>
";
$headers="MIME-Version:1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8". "\r\n";

$headers .= 'From: <noreply@activation.com>' . "\r\n";
$headers .= 'Cc: <myboss@example.com>' . "\r\n";

mail($to,$subject,$message,$headers);
echo "Please Check your email";
mysqli_close($mysql);
?>
