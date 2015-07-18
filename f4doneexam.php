
<html>
PROBLEM SUCCESSFULLY ADDED.... :) !!! 
<?php

// Create connection
$con=mysqli_connect("localhost","root","","my_db");
$res = mysqli_query($con,"SELECT count(ProbID) from Problem");
while($row = mysqli_fetch_array($res)) {
  $cnt = $row[0];
} 
$goodcode = mysql_real_escape_string($_POST["probcode"]);
$gooddescp = mysql_real_escape_string($_POST["probdescp"]);

$res1 = mysqli_query($con,"SELECT * from temp");
while($row1 = mysqli_fetch_array($res1)) {
  $a = $row1[0];
  $b = $row1[1];
  $c = $row1[2];
} 

$sql = "INSERT INTO Problem (ProbName, ProbID, TotalAcc, TotalSub, ProbDescp, TestCases, AdminCode,PCourseID,PExamID) 
VALUES ('$_POST[probname]',$cnt+1,0,0,'$gooddescp','$_POST[probtestcases]','$goodcode','$b','$a')";
//session_unset();
//session_destroy(); 

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

?> 
</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-2);" />
</html>


