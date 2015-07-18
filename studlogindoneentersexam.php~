<?php 
    session_start();
	$con = mysqli_connect("localhost","root","","my_db"); 
	$res = mysqli_query($con,"SELECT SPasswd from Student where RollNo = $_POST[rollno]");
	while($row = mysqli_fetch_array($res)) {
  		if(!strcmp($_POST["passwd"],$row["SPasswd"])) {
  		    echo "Logged In..";
  		    $_SESSION['p'] = $_POST["passwd"];
  		    $_SESSION['u'] = $_POST["rollno"]; 
  		}
  		else {
  		    echo "Invalid Roll Number and/or Password";
  		}
	}
    
?>

<html>
<head>
  <style type="text/css">
      button {
    background:none!important;
     border:#333; 
     padding:0!important;
    /*border is optional*/
     border-bottom:1px solid #444; 
     cursor: pointer;
}
  </style>
</head>
Hello ,.. You have entered the exam room<br><br>
These are the exams

<?php
// Create connection
$con=mysqli_connect("localhost","root","","my_db");
$res = mysqli_query($con,"SELECT * from Exam order by ECourseID");

$id = 1;
echo "<br><br>";
while($row = mysqli_fetch_array($res)) {
  echo "<div class = 'row'>
<form action='http://localhost/skr/dbmsproj/examroom.php' method='post'>
<button type='submit' formaction='examroom.php' name = 'probs' value = '$row[1]'>$row[1]</button></div>
</form>";
   echo " Course ID :- $row[2] Exam Name :- $row[3] <br> <br>";
  $id = $id + 1;
  
} 

?>

</html>
<html>
<input action="action" type="button" value="Log Out" onclick="history.go(-1);" />
</html>
