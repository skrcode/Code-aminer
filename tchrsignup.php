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

<h1 align=center>Enter Login Details</h1>

<form action = "tchrsigndone.php" method = "post">

<fieldset class="login">
			<div>
				<label for="name">User Name</label> <input type="text" name="tname">
			</div>
			<div>
				<label for="rollno">TchrID</label> <input type="text" name="tid">
			</div>
			<div>
				<label for="password">Password</label> <input type="password" name="tpwd">
			</div>
</fieldset>		

<div><button type="submit" value="Submit-go">Submit</button></div>


</form>

</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>
