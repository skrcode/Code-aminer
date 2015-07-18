<?php

$con=mysqli_connect("localhost","root","","my_db");
$res = mysqli_query($con,"SELECT PARollNO , sum(Verdict) from ProblemAttempt,Problem where ProbId = PAProbID and PExamID = $_POST[ps] group by PARollNo");
$id = 1;
echo "<table cellpadding='0' cellspacing='0' border='0'>
  <tr>
    <th>Roll Number</th>
    <th>Marks</th>
  </tr>";
?>
<?php while($row = mysqli_fetch_array($res)) { ?>
  <tr>
    <td align = 'center' style='width: 200px;'><?php echo $row[0]; ?></td><td align = 'center' style='width: 100px;'><?php echo $row[1]; $id = $id+1;?></td>
  </tr>
 <?php } ?> 
  <html>
<input action="action" type="button" value="Close Mark List" onclick="history.go(-1);" />
<br><br><br>
</html>



