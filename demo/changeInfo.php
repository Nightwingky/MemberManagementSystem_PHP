<!DOCTYPE html>
<html>
<head>
	<title>ChangeMyInfo</title>

	<style type="text/css">
		.container
		{
			width:225px;
			height:auto;
			margin:10px auto;
		}
	</style>

</head>
<body>

<?php
	session_start();

	$link = mysqli_connect('localhost', 'root', '666796');
	$db_selected = mysqli_select_db($link, 'php');
	mysqli_query($link, "set names 'utf8'");

	$sqlStr = "select username, gender, birthdate, email, question, answer from userinfo where username = '".$_SESSION["username"]."'";
	$result = mysqli_query($link, $sqlStr);

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	mysqli_close($link);
?>

<div class = "container">
	<h3 align = "center">Change My Information</h3>

	<form
		method = "post"
		action = "checkChangeInfo.php">
	<table border = '1'>
		<tr>
			<th>username</th>
			<td align = "center">
				<?php
					if(isset($_GET["username"]))
					{
						echo $_GET["username"];
					}
				?>
			</td>
		</tr>
		<tr>
			<th>gender</th>
			<td align = "center">
				male<input type = "radio" name = "gender" value = "male" 
				<?php 
					if($row['gender'] == "male")
					{
						echo "checked = 'checked'";
					}
				?>/>
				female<input type = "radio" name = "gender" value = "female"
				<?php 
					if($row['gender'] == "female")
					{
						echo "checked = 'checked'";
					}
				?>/>
			</td>
		</tr>
		<tr>
			<th>birthdate</th>
			<td align = "center">
				<input type = "text" name = "birthdate" <?php echo "value = '".$row['birthdate']."'";?>/>
			</td>
		</tr>
		<tr>
			<th>email</th>
			<td align = "center">
				<input type = "text" name = "email" <?php echo "value = '".$row['email']."'";?>/>
			</td>
		</tr>
		<tr>
			<th>question</th>
			<td align = "center">
				<input type = "text" name = "question" <?php echo "value = '".$row['question']."'";?>/>
			</td>
		</tr>
		<tr>
			<th>answer</th>
			<td align = "center">
				<input type = "text" name = "answer" <?php echo "value = '".$row['answer']."'";?>/>
			</td>
		</tr>
		<tr>
			<td colspan = "2" align = "center">
				<input type = "submit" value = "submit" name = "submit">
			</td>
		</tr>
	</table>
	</form>
</div>

</body>
</html>