
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
$sql = "INSERT INTO Problem (ProbName, ProbID, TotalAcc, TotalSub, ProbDescp, TestCases, AdminCode) 
VALUES ('$_POST[probname]',$cnt+1,0,0,'$gooddescp','$_POST[probtestcases]','$goodcode')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?> 
</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>

