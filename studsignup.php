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
<head>
<link rel="stylesheet" href="aaa.css">
</head>
Enter Login Details
<form name = "input"  action = "studsigndone.php" method = "post">

<fieldset class="login">
			<div>
				<label for="name">Name</label> <input type="text" name="sname">
			</div>
			<div>
				<label for="rollno">RollNo</label> <input type="text" name="rno">
			</div>
			<div>
				<label for="password">Password</label> <input type="password" name="pwd">
			</div>
</fieldset>		

<div><button type="submit" value="Submit-go">Submit</button></div>

</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>
