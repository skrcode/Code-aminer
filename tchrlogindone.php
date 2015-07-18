<?php 
	$con = mysqli_connect("localhost","root","","my_db"); 
	$res = mysqli_query($con,"SELECT TPasswd from Teacher where TchrID = $_POST[tchrid]");
	while($row = mysqli_fetch_array($res)) {
  		if(!strcmp($_POST["tchrpasswd"],$row["TPasswd"])) {
  		    echo "Logged In successfully..";
  		    echo " <form action = 'f3addprob.php' >
			<input type='submit' value='Create Practice Problem'> </form>";
			echo "<br>";
  		    echo " <form action = 'createexam.php' >
			<input type='submit' value='Create Exam'> </form>";
			echo "<br>";
  		    echo " <form action = 'seemarks.php' >
			<input type='submit' value='See MarkLists'> </form>";
  		}
  		else {
  		    echo "Invalid TeacherID and/or Password";
  		}
	} 
?>
<html>
</style>
<head>
<link rel="stylesheet" href="aaa.css">
</head>

<style type="">
<!--
body {
background-image: url(bgimage.jpg);
background-repeat: no-repeat;
height: 100%;
width: 100%;
background-position: bottom;
}
//-->
</style>
<input action="action" type="button" value="Log Out" onclick="history.go(-2);" />
</html>
