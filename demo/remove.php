<!DOCTYPE html>
<html>
<head>
	<title>Remove...</title>
</head>
<body>

<?php
	session_start();
	
	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];

		$link = mysqli_connect('localhost', 'root', '666796');
		$db_selected = mysqli_select_db($link, 'php');
		mysqli_query($link, "set names 'utf8'");

		$sqlStr = "delete from userinfo where username = '".$id."'";
		mysqli_query($link, $sqlStr);

		mysqli_close($link);

		header("location:admin.php?username=".$_SESSION["username"]."&role=".$_SESSION["role"]);
	}
?>

</body>
</html>