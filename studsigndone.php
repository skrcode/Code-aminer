<?php 
	$con = mysqli_connect("localhost","root","","my_db"); 
	$res = mysqli_query($con,"INSERT INTO Student VALUES($_POST[rno],'$_POST[pwd]','$_POST[sname]')");
	if(!$res) {
	    echo("Invalid Details---->" . mysqli_error($con));
	}
	else {
	    echo "User Successfully Registered..!!!";
	}
?>

<html>
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
<input action="action" type="button" value="Go Back" onclick="history.go(-2);" />
</html>

