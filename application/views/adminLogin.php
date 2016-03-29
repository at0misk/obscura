<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
<style>
	#container{
		margin:0px auto;
		margin-top:10%;
		width:400px;
		height:200px;
		border:1px solid silver;
		padding:10px;
	}
	.red{
		color: red;
	}
</style>
</head>
<body>
	<div id="container">
		<h3>Admin Login Page</h3>
		<form action="AdminDashboard" method="post">
		<p>Email: <input type="text" name="email"></p>
		<p>Password: <input type="password" name="password"></p>
		<input type="submit" value="Login">
		</form>
	<?php 
		echo "<span class='red'>" . $this->session->userdata('errorsA') . "</span>";
	?>
	</div>
</body>
</html>