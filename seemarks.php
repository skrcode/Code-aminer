<html>

Choose Course<br><br>

<?php
// Create connection
$con=mysqli_connect("localhost","root","","my_db");
$res = mysqli_query($con,"SELECT distinct ECourseID from Exam ");

$id = 1;
echo "<br><br>";
while($row = mysqli_fetch_array($res)) {
  echo "<div class = 'row'>
<form action='http://localhost/skr/dbmsproj/examroom.php' method='post'>
<button type='submit' formaction='aftercourseid.php' name = 'probs' value = '$row[0]'>$row[0]</button></div>
</form>";
  $id = $id + 1;
  
} 

?>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>
