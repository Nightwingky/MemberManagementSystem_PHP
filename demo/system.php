<!DOCTYPE html>
<html>
<head>
	<title>System</title>

	<script type="text/javascript">
    	var calTime = function (t) 
    	{
	        if (t < 10)
	        {
	        	t = "0" + t;
	        }
	        return t;
	    }
	 
	    var updateNowTime = function() 
	    {
	        var date = new Date();
	        var year = date.getFullYear();
	        var month = date.getMonth() + 1; 
	        var day = date.getDate(); 
	        var hours = date.getHours();
	        var minutes = date.getMinutes();
	        var secs = date.getSeconds();
	 
	        document.getElementById("timer").innerHTML = year + "-" + month + "-" + day + " " + calTime(hours) + ":" + calTime(minutes) + ":" + calTime(secs);
	    }
	 
	    setInterval('updateNowTime()', 500);
	</script>

	<style>
    	ul 
    	{
			list-style-type:none;
			margin: 0px;
			padding:0px;
			width:488px;
		}

		li 
		{
			float:left;
			margin-left:1px;
			margin-right: 1px;
		}

		a 
		{
			text-decoration:none;
			display: block;
			height:30px;
			line-height:30px;
			width:120px;
			background-color:#eeeeee;
			text-align:center;
			color:black;
		}

		.titleContainer 
		{
			margin:10px auto;
			border:1px solid black;
			width:1000px;
			height:auto;
		}

		.userInfo
		{
			width:100px;
			height:30px;
			float:left;
			padding:15px 0px 0px 30px;
		}

		.titlebar 
		{
			margin:20px 0px 0px 130px;
			width:488px; 
			display:inline-block !important; 
			display:inline; 
		}

		.timer
		{
			float:right;
			width:100px;
			height:30px;
			padding:15px 0px 0px 30px;
		}
	</style>

</head>
<body onload="updateNowTime()">

<?php
	session_start();
	$_SESSION["username"] = "UserInfo";
?>

<div class = "titleContainer">
	<div class = "userInfo">
		<b>Welcome</b>
		<br>
		<b>
		<?php
			if(isset($_GET["username"]))
			{
				$_SESSION["username"] = $_GET["username"];
			}
			echo $_SESSION["username"];
		?>
		</b>
	</div>

	<div class = "titlebar">
		<ul>
			<li><a href="system.php">系统首页</a></li>
			<li><a href="">个人信息</a></li>
			<li><a href="">修改密码</a></li>
			<li><a href="">系统管理</a></li>
		</ul>
	</div>

	<div class = "timer" id = "timer">
	</div>
</div>

<div class = "container">
</div>

</body>
</html>
