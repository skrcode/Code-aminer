<html>
<body>
 
<?php 
session_start();
file_put_contents('userprog.c', $_POST["content"]);

$quantity = '/home/skr/public_html/dbmsproj/userprog.c';
$cmd = 'cc ';
$cmd.=$quantity;
$cmd.=' -o user.out';

//Get output of user program to stdout of input file
$f1 = shell_exec($cmd);

shell_exec('/home/skr/public_html/dbmsproj/user.out < stdin.txt > stdout.txt');

//Get output of admin program to answers file
shell_exec('cc /home/skr/public_html/dbmsproj/adminprog.c -o admin.out');
shell_exec('/home/skr/public_html/dbmsproj/admin.out < stdin.txt > answers.txt');

//Run exec for comparing input and output files
shell_exec('cc /home/skr/public_html/dbmsproj/testerprog.c -o tester.out ');
$verdict = shell_exec('/home/skr/public_html/dbmsproj/tester.out');

$con=mysqli_connect("localhost","root","","my_db");
$sql = "SELECT * from Problem where ProbID = ".$_SESSION['id'];
$res = mysqli_query($con,$sql);
$res1 = mysqli_query($con,"SELECT * from ProblemAttempt where PAProbID = '$_SESSION[id]' and PARollNo = '$_SESSION[u]'");
$cntc = -1;
while($row = mysqli_fetch_array($res1)) {
    $cntc = $row[0];
}
if(isset($_SESSION['u']) && $cntc == -1) mysqli_query($con,"INSERT INTO ProblemAttempt VALUES ('$_SESSION[id]','$_SESSION[u]','0')" );
while($row = mysqli_fetch_array($res)) {
    $cnta = $row[2];
    $cntt = $row[3];
}

if($verdict[0]=='C') {
	echo '<font color="green">Correct Answer!</font><br> <img src="correct.png" style="width:304px;height:228px">';
	$temp = "UPDATE Problem SET TotalSub=$cntt+1, TotalAcc = $cnta+1 WHERE ProbID = ".$_SESSION['id'];
	mysqli_query($con,$temp);
	if(isset($_SESSION['u'])) 
	    mysqli_query($con,"UPDATE ProblemAttempt SET Verdict = 1 where PAProbID = '$_SESSION[id]' and PARollNo = '$_SESSION[u]'");
}
else {
	echo '<font color="red">WRONG...Your Program did not produce the required output (or did not compile)!</font><br> <img src="wrong.png" style="width:304px;height:228px">';  
    $temp = "UPDATE Problem SET TotalSub=$cntt+1 WHERE ProbID = ".$_SESSION['id'];
    mysqli_query($con,$temp);
  
}

shell_exec('rm /home/skr/public_html/dbmsproj/stdout.txt');
shell_exec('rm /home/skr/public_html/dbmsproj/user.out');
shell_exec('rm /home/skr/public_html/dbmsproj/tester.out');
shell_exec('rm /home/skr/public_html/dbmsproj/admin.out');
shell_exec('rm /home/skr/public_html/dbmsproj/answers.txt');
shell_exec('rm /home/skr/public_html/dbmsproj/userprog.c');
shell_exec('rm /home/skr/public_html/dbmsproj/stdin.txt');
shell_exec('/home/skr/public_html/dbmsproj/stdin.txt');
?>

<br><br>

</body>
</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>
