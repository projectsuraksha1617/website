<?php
   $con=mysql_connect("localhost","my_user","my_password","my_db");
   
   $name = $_POST["name"];
   $age = $_POST["age"];
   $password = $_POST["password"];
   $aadharnumber = $_POST["aadharnumber"];
   
   $statement = mysqli_prepare($con, "INSERT INTO User1(name,age,aadharnumber,password) VALUES (?,?,?,?) ");
   mysqli_stmt_bind_param($statement,"siis",$name,$age,$aadharnumber,$password);
   mysqli_stmt_execute($statement);
   
   mysqli_stmt_close($statement);
   
   mysqli_close($con);
   ?>