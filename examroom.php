<html>

Choose a Problem .... !!<br><br><br>
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

<?php
// Create connection
$con=mysqli_connect("localhost","root","","my_db");
$res = mysqli_query($con,"SELECT ProbID,ProbName,TotalAcc,TotalSub from Problem,Exam where ExamID = PExamID and ExamID = '$_POST[probs]'");

$id = 1;

while($row = mysqli_fetch_array($res)) {
  echo "<div class = 'row'>
<form action='http://localhost/skr/dbmsproj/f4eachproblem.php' method='post'>
<button type='submit' formaction='f4eachproblem.php' name = 'prob' value = '$row[0]'>$row[1]</button>
</form>
  </div>";
  echo "Number Accepted : "; 
  echo $row[2];
  echo "     Total Submitted : ";
  echo $row[3];
   echo "<br> <br> <br> <br>";
  $id = $id + 1;
  
} 

?>
</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>
