<!DOCTYPE html>
<html>
<head>
	<title>Verify...</title>
</head>
<body>

<?php
	$link = mysqli_connect('localhost', 'root', '666796');
	$db_selected = mysqli_select_db($link, 'php');
	mysqli_query($link, "set names 'utf8'");
	mysqli_query($link, "insert into userinfo values('1234567890','12','male','1996-10-24','123','12','12','12','12','12','0')");
?>

</body>
</html>