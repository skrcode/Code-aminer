


    <?php
        session_start();
        shell_exec('rm /home/skr/public_html/dbmsproj/description.txt');
        $query =  $_POST['prob'];
        $con=mysqli_connect("localhost","root","","my_db");
        $res = mysqli_query($con,"SELECT * from Problem where ProbID = $query");
        while($row = mysqli_fetch_array($res)) {
            file_put_contents('description.txt', $row[4]);
  			echo "<iframe src='description.txt' width='1250' height='300'></iframe>";
  			file_put_contents('adminprog.c', "$row[6]");
  			file_put_contents('stdin.txt', $row[5]);

			$_SESSION['id'] = $row[1];
		}
    ?>

<html>
<head>
<br><br>Please enter your code in the editor below and click Submit....
<script language="javascript" type="text/javascript" src="editor/editarea_0_8_2/edit_area/edit_area_full.js"></script>
<script language="javascript" type="text/javascript">
editAreaLoader.init({
	id : "textarea_1"		// textarea id
	,syntax: "css"			// syntax to be uses for highgliting
	,start_highlight: true		// to display with highlight mode on start-up
});
</script>
</head>
<body>
<form action="checker.php" method="post">
	<textarea id="textarea_1" name="content" cols="176" rows="15">
</textarea>

<input type="submit" value="Submit">
</form>
</body>
</html>
<html>
<input action="action" type="button" value="Go Back" onclick="history.go(-1);" />
</html>

