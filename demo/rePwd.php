<!DOCTYPE html>
<html>
<head>
	<title>Reset...</title>
</head>
<body>

<?php
	session_start();

	if(isset($_POST["submit"]))
	{
		$oldPwd = $_POST["oldPwd"];
		$newPwd1 = $_POST["newPwd1"];
		$newPwd2 = $_POST["newPwd2"];

		$link = mysqli_connect('localhost', 'root', '666796');
		$db_selected = mysqli_select_db($link, 'php');
		mysqli_query($link, "set names 'utf8'");

		$sqlStr = "select pwd from userinfo where username = '".$_SESSION["username"]."'";
		$result = mysqli_query($link, $sqlStr);

		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		print_r($row);
		echo $row['pwd'];
		if($row['pwd'] != $oldPwd)
		{
			header("refresh:3;url = pwd.php??username=".$_SESSION["username"]."&role=".$_SESSION["role"]);
			echo 'Old password is wrong';
			exit();
		}
		else
		{
			if($newPwd1 != $newPwd2)
			{
				//header("refresh:3;url = pwd.php?username=".$_SESSION["username"]."&role=".$_SESSION["role"]);
				echo 'Two inputs are not same';
				exit();
			}
			else
			{
				$sqlStr = "update userinfo set pwd = '".$newPwd1."' where username = '".$_SESSION['username']."'";
				mysqli_query($link, $sqlStr);

				echo mysqli_error($link);

				mysqli_close($link);
				header("location:pwd.php?username=".$_SESSION["username"]."&role=".$_SESSION["role"]);
			}
		}
	}
?>

</body>
</html>