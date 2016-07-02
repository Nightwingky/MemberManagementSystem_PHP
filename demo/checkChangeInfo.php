<!DOCTYPE html>
<html>
<head>
	<title>Check...</title>
</head>
<body>

<?php
	session_start();

	if(isset($_POST["submit"]))
	{
		$gender = $_POST["gender"];
		$birthdate = $_POST["birthdate"];
		$email = $_POST["email"];
		$question = $_POST["question"];
		$answer = $_POST["answer"];

		$link = mysqli_connect('localhost', 'root', '666796');
		$db_selected = mysqli_select_db($link, 'php');
		mysqli_query($link, "set names 'utf8'");

		$sqlStr = "update userinfo set gender = '".$gender."', birthdate = '".$birthdate."', email = '".$email."', question = '".$question."', answer = '".$answer."' where username = '".$_SESSION['username']."'";
		mysqli_query($link, $sqlStr);

		echo mysqli_error($link);

		mysqli_close($link);

		header("location:userinfo.php?username=".$_SESSION["username"]."&role=".$_SESSION["role"]);
	}
?>

</body>
</html>