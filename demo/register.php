<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
	<style type="text/css">
		.container
		{
			margin:10px auto;
			height:300px;
			width:400px;
		}

		.table
		{
			margin:20px auto;
			border:1px solid black;
		}
	</style>
<body>

<h3 align = "center">Register</h3>

<div class = "container">
<form
	method = "post"
	action = "">
	<table class = "table" border = "1">
		<tr>
			<th>username</th>
			<td align = "center">
				<input type = "text" name = "username" placeholder="username"/>
			</td>
		</tr>
		<tr>
			<th>gender</th>
			<td align = "center">
				male<input type = "radio" name = "gender" value = "male"/>
				female<input type = "radio" name = "gender" value = "female"/>
			</td>
		</tr>
		<tr>
			<th>birthdate</th>
			<td align = "center">
				<input type = "text" name = "birthdate" placeholder="1900-01-01"/>
			</td>
		</tr>
		<tr>
			<th>password</th>
			<td>
				<input type = "password" name = "password1"/>
			</td>
		</tr>
		<tr>
			<th>password again</th>
			<td>
				<input type = "password" name = "password2"/>
			</td>
		</tr>
		<tr>
			<th>question</th>
			<td>
				<input type = "text" name = "question" placeholder="question"/>
			</td>
		</tr>
		<tr>
			<th>answer</th>
			<td>
				<input type = "text" name = "answer" placeholder="answer"/>
			</td>
		</tr>
		<tr>
			<th>email</th>
			<td>
				<input type = "text" name = "email" placeholder = "email"/>
			</td>
		</tr>
		<tr>
			<th>role</th>
			<td align = "center">
				user<input type = "radio" name = "role" value = "0"/>
				admin<input type = "radio" name = "role" value = "1"/>
			</td>
		</tr>
		<tr>
			<td colspan="2" align = "center">
				<input type = "submit" value = "submit" name = "submit">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "reset" value = "reset">
			</td>
		</tr>
	</table>
</form>
</div>

</body>
</html>