<!DOCTYPE html>
<html>
<head>
	<title>CheckRegister...</title>
</head>
<body>

<?php
	if(isset($_POST["submit"]))
	{
		$username = $_POST["username"];
		$gender = $_POST["gender"];
		$birthdate = $_POST["birthdate"];
		$pwd1 = $_POST["password1"];
		$pwd2 = $_POST["password2"];

		if($username == "" || 
			$gender == "" ||
			$birthdate == "" ||
			$pwd1 == "" ||
			$pwd2 == "")
		{
			header("refresh:3;url = register.php");
			echo 'INCOMPLETE INFORMATION';
			exit();
		}

		if($pwd1 != $pwd2)
		{
			header("refresh:3;url = register.php");
			echo 'Two password inputs are not same';
		}
			
		$userid = sha1($username);

		$link = mysqli_connect('localhost', 'root', '666796');
		$db_selected = mysqli_select_db($link, 'php');
		mysqli_query($link, "set names 'utf8'");

		$sql = "select userid from userinfo";
		$result = mysqli_query($link, $sql);

		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			if($row["userid"] == $userid)
			{
				header("refresh:3;url = register.php");
				echo 'Username repeat';
				exit();
			}
		}

		$sqlInsert = "insert into userinfo(userid, username, gender, birthdate, pwd) values('".$userid."', '".$username."', '".$gender."', '".$birthdate."', '".$pwd1."')";
		if(mysqli_query($link, $sqlInsert))
		{
			header("refresh:3;url = index.php");
			echo "<h3 align = 'center'>SUCCESS</h3>";
		}
		else
		{
			echo mysqli_error($link);
		}
			
		mysqli_close($link);
		
	}
	
?>

</body>
</html>