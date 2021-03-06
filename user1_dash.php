﻿<?php
ob_start();
session_start();
if($_SESSION['adhaar']==FALSE)
{
header("Location:user.html");
}
ob_end_clean();
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
window.history.forward(1);
function noBack(){
window.history.forward();
}
</script>

<style>
div.background {
width: 1030px;
height:550px;
position: fixed;  
} 

img {
top: 0;
left: 0;
position: absolute;
padding: 0;
display: block;
margin: 0 auto;
max-height: 100%;
max-width: 100%;
margin-left: 70px;
}


div.transbox {
  margin: 30px;
  background-color: white;
  
  opacity: 0.2;
  filter: alpha(opacity=60); 
}

div.transbox p {
  position: absolute;
  top: 80%;
  left: 40%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
}
</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Suraksha Dashboard</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">​
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>SURA</span>KSHA</a>
				<?php
				$conn=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha");
				$res=mysqli_query($conn,"select First_Name from user where Adhaar_No='".$_SESSION['adhaar']."'");
				while($row = mysqli_fetch_array($res))
    				{
    				$name =$row['First_Name'];
 				}
 				?>
				
				<!--<ul class="blah-menu"><p style="font-size: 1em;margin-left:25%">PoliceID:</br> Name:<?php echo $name;?></br> Role:</p></ul>-->
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
						<li><a href="logout_user.php"><svg class="glyph stroked cancel"></svg><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span><strong> Logout</strong></a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form>
			<div class="form-group">
			
				<?php
				ob_start();
				$conn=mysqli_connect("localhost","simuneti_meghana","Projectsuraksha@2017","simuneti_suraksha");
				$res=mysqli_query($conn,"select Photo from user where Adhaar_No='".$_SESSION['adhaar']."'");
				$row = mysqli_fetch_assoc($res);
				
 				header("Content-type:image/*");
				echo $row['Photo'];
				ob_end_clean();
				?>
				
		<span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 8em;margin-top: 10px;margin-left: 20%;text-align:center;"></span>
			</div>
		</form>
		<ul class="nav menu">
			<li class="active "><a href="user1_dash.php"><svg class="glyph stroked dashboard-dial"></svg><i class="fa fa-home" aria-hidden="true"></i><strong> Dashboard</strong></a></li>
			<li><a href="update_user.php"><svg class="glyph stroked calendar"></svg><i class="fa fa-pencil" aria-hidden="true"></i><strong> Update Profile</strong></a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"></svg><i class="fa fa-eye" aria-hidden="true"></i><strong> View Profile</strong></a></li>
			<li><a href="user_lodgecomplaint.php"><svg class="glyph stroked star"></svg><i class="fa fa-pencil-square" aria-hidden="true"></i><strong>  Lodge Complaint</strong></a></li>
			<li><a href="forms.html"><svg class="glyph stroked star"></svg><i class="fa fa-location-arrow" aria-hidden="true"></i><strong> Track Complaint</strong></a></li>
			<li><a href="forms.html"><svg class="glyph stroked star"></svg><i class="fa fa-history" aria-hidden="true"></i><strong> History</strong></a></li>
		
			<li role="presentation" class="divider"></li>
		
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			<p style="font-size: 17px;margin-top:10px;"> Name : <?php echo $name;?></br>
			Adhaar : </p>
			
			<h1><marquee behavior="scroll" width="100%" height="5%">Welcome to Suraksha</marquee></h1>
<div class="background" style="width: 100%;position: relative;top: 0;left: 0;">
<img src="images/Digital_India.jpg" />
</div>


			</div>
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
