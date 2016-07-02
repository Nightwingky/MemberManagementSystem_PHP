<!DOCTYPE html>
<html>
<head>
	<title>Verify...</title>
</head>
<body>

<?php
	session_start();

	if(isset($_POST["register"]))
	{
		header("location:register.php");
		exit();
	}
	else if(isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$password = $_POST["password"];
		$authcode = $_POST["authcode"];

		$link = mysqli_connect('localhost', 'root', '666796');
		$db_selected = mysqli_select_db($link, 'php');
		mysqli_query($link, "set names 'utf8'");

		$sqlStr = "select username, pwd from userinfo";
		$result = mysqli_query($link, $sqlStr);

		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$flag = 0;
			if($username == $row['username'])
			{
				$flag = 1;
				if($password == $row['pwd'])
				{
					if($authcode != $_SESSION['authcode'])
					{
						header("refresh:3;url = index.php");
						echo "Wrong Authcode";
					}
					else
					{
						echo "<h3 align = 'center'>Welcome my friend ".$username."</h3>";
						break;
					}
				}
				else
				{
					header("refresh:3;url = index.php");
					echo "Wrong Password";
				}
			}
		}

		if($flag == 0)
		{
			header("refresh:3;url = register.php");
			echo "Please <b>REGISTER</b> first";
		}

	}
?>



</body>
</html>