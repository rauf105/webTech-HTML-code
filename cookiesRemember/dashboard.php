<?php
session_start();
 
// Prevent access without login
if (!isset($_SESSION['username'])) {
	header("Location: loginRemember.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<title>Home</title>
	<style>
		body{margin:0;font-family:Arial;background:#f4f6f8;}
		.header{background:#2c3e50;color:#fff;padding:15px 20px;display:flex;justify-content:space-between;align-items:center;}
		.menu a{color:#fff;margin-left:15px;text-decoration:none;font-weight:bold;}
		.menu a:hover{text-decoration:underline;}
		.content{padding:30px;background:#fff;margin:20px;border-radius:8px;}
		.footer{background:#2c3e50;color:#fff;text-align:center;padding:10px;}
	</style>
</head>
<body>
 
 
	
	<div class="header">
	<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
	<div class="menu">
		<a href="home.php">Home</a>
		<a href="changeprofile.php">Profile Change</a>
		<a href="forgetpassword.php">Forget Password</a>
		<a href="logout.php">Logout</a>
	</div>
</div>

<div class="content">
	<h3>Dashboard</h3>
	<p>You are logged in successfully.</p>
</div>

<div class="footer">
	&copy; 2025 My Website
</div>
 
</body>
</html>
 