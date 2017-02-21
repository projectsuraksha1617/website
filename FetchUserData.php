<?php
   $con=mysql_connect("localhost","my_user","my_password","my_db");
   
   $password = $_POST["password"];
   $aadharnumber = $_POST["aadharnumber"];
   
   $statement = mysqli_prepare($con, "SELECT * FROM User WHERE aadharnumber = ? AND password = ?");
   mysqli_stmt_bind_param($statement,"is" , $aadharnumber,$password);
    mysqli_stmt_execute($statement);
	mysqli_stmt_store_result($statement);
	mysqli_stmt_bind_result($statement, $userID,$name,$age,$aadharnumber,$password);
	
	$user = array();
	
	while(mysqli_stmt_fetch($statement)){
		$user[name] = $name;
		$user[age] = $age;
		$user[aadharnumber] = $aadharnumber;
		$user[password] = $password;
	}
		echo json_encode($user);
		mysqli_stmt_close($statement);
		
		
		mysqli_close($con);
?>
   