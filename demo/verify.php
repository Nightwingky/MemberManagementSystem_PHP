<!DOCTYPE html>
<html>
<head>
	<title>Verify...</title>
</head>
<body>

<?php
/*
	$link = mysqli_connect('localhost', 'root', '666796');
	$db_selected = mysqli_select_db($link, 'php');
	mysqli_query($link, "set names 'utf8'");
	$sql = "select * from userinfo";

	$result = mysqli_query($link, $sql);
	print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));
	
	mysqli_query($link, "insert into userinfo(userid, username, gender, birthdate, pwd, question, answer, email, photopath, intro, role, regtime) values('1239997890', 'SamSam', 'male', '1996-10-24', '123456789', 'question', 'answer', 'qky1024@163.com', '123', 'qwe', '1', '1996-10-24 00:00:01')");
*/

	if(isset($_POST["register"]))
	{
		header("location:register.php");
		exit();
	}
?>



</body>
</html>