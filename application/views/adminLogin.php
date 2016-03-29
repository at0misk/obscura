<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
<style>
	#container{
		margin:0px auto;
		width:400px;
		height:200px;
		border:1px solid silver;
		padding:10px;
	}
</style>
</head>
<body>
	<div id="container">
		<h3>Admin Login Page</h3>
		<form action="Dashboard" method="post">
		<p>Email: <input type="text" name="email"></p>
		<p>Password: <input type="password" name="password"></p>
		<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>