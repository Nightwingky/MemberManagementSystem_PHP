<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style type="text/css">
		.container
		{
			margin:10px auto;
			height:300px;
			width:400px;
			border:1px solid red;
		}

		.table
		{
			margin:20px auto;
			border:1px solid black;
		}
	</style>

</head>
<body>

<?php
/*
	if(isset($_REQUEST['authcode']))
	{
		session_start();

		if(strtolower($_REQUEST['authcode']) != strtolower($_SESSION['authcode']))
		{
			echo '<font color = "#CC0000">wrong</font>';
		}
	}
*/
?>

<div class = "container">
	<table class = "table" border = "1">
		<tr>
			<th>Username</th>
			<td align = "center"><input type = "text" name = "username" value = ""/></td>
		</tr>
		<tr>
			<th>Password</th>
			<td align = "center"><input type = "text" name = "password" value = ""/></td>
		</tr>
		<tr>
			<th rowspan = "3">AuthCode</th>
			<td align = "center"><input type = "text" name = "authcode" value = ""/></td>
		</tr>
		<tr>
			<td align = "center">
				<img id = "capatcha_img" border = "1" src = "verificationCode.php?r=<?php echo rand();?>" width = "100" height = "30">
			</td>
		</tr>
		<tr>
			<td align = "center">
				<a href = "javascript:void(0)" 
					onclick = "document.getElementById('capatcha_img').src = 'verificationCode.php?r='+Math.random()">Another One?</a>
			</td>
		</tr>
		<tr>
			<td align = "center" colspan = "2">
				<input type = "button" value = "Submit" onclick="">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "button" value = "Register" onclick="">
			</td>
		</tr>
	</table>
</div>

</body>
</html>