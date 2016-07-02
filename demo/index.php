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

<div class = "container">
<form
	method = "post"
	action = "verify.php">
	<table class = "table" border = "1">
		<tr>
			<th>Username</th>
			<td align = "center"><input type = "text" name = "username" placeholder = "username"/></td>
		</tr>
		<tr>
			<th>Password</th>
			<td align = "center"><input type = "pwd" name = "password" placeholder = "password"/></td>
		</tr>
		<tr>
			<th rowspan = "3">AuthCode</th>
			<td align = "center"><input type = "text" name = "authcode" placeholder = "authcode"/></td>
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
				<input type = "submit" value = "submit" name = "submit">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "submit" value = "register" name = "register">
			</td>
		</tr>
	</table>
</form>
</div>

</body>
</html>