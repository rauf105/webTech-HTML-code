<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Save cookies if Remember Me checked
	if (isset($_POST['remember'])) {
		setcookie("username", $_POST['uname']);
		setcookie("password", $_POST['password']);
	}

	
	$_SESSION['username'] = $_POST['uname'];

	// Redirect to dashboard
	header("Location: dashboard.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body{
			height:100vh;
			display:flex;
			justify-content:center;
			align-items:center;
			font-family:Arial;
		}
		fieldset{width:300px;padding:20px;}
	</style>
</head>
<body>

<form method="post">
	<fieldset>
		<legend>Login</legend>

		<label>Username</label>
		<input type="text" name="uname"
		       value="<?php echo $_COOKIE['username'] ?? ''; ?>"><br><br>

		<label>Password</label>
		<input type="password" name="password"
		       value="<?php echo $_COOKIE['password'] ?? ''; ?>">

		<br><br>
		<input type="checkbox" name="remember"> Remember Me
		<br><br>

		<input type="submit" value="Login">
	</fieldset>
</form>

</body>
</html>
