
<?php if(isset($_POST['enumofprobs'])) {
$con=mysqli_connect("localhost","root","","my_db");
$res = mysqli_query($con,"SELECT count(ExamID) from Exam");
while($row = mysqli_fetch_array($res)) {
  $cnt = $row[0];
} 
$sql = "INSERT INTO Exam (NumProbs ,ExamID,ECourseID,EName)
VALUES ('$_POST[enumofprobs]',$cnt+1,'$_POST[ecid]','$_POST[ename]')";


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
$res1 = mysqli_query($con,"DELETE from temp where 1");
$sql = "INSERT INTO temp (a ,b,c)
VALUES ($cnt+1,'$_POST[ecid]','$_POST[enumofprobs]')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);}
?>
<?php 
$con=mysqli_connect("localhost","root","","my_db");
$res = mysqli_query($con,"SELECT * from temp");
while($row = mysqli_fetch_array($res)) {
  $a = $row[0];
  $b = $row[1];
  $c = $row[2];
} 

     for($i=1;$i<=$c;$i = $i + 1) { 
     echo "
		<form action='http://localhost/skr/dbmsproj/f3addprobexam.php' method='post'>
<button type='submit' formaction='f3addprobexam.php' name = 'is' value = 'Problem - $i'>Problem - $i</button>
</form>";
	
}
	

//$res1 = mysqli_query($con,"DELETE from temp where 1");
?>

</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>
