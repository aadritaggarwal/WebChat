<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main">
	<div id="info">
		<h2>Login Here</h2>

		<form action="login.php" method="post">
			<label><b>Username</b></label>
			<input type="text" name="uname" placeholder="User Name"><br><br>
			<label><b>Password</b></label>
			<input type="text" name="pass" placeholder="Password"><br><br>
			<button style="background-color:#6495ed;color: white;" type="submit"><b>Login</b></button>
		</form>

		<form action="signup.php" method="post">
			<h2>If No Account, Then Sign-Up Here.</h2>
			<label><b>Username</b></label>
			<input type="text" name="uname" placeholder="User Name"><br><br>
			<label><b>Email-Id</b></label>
			<input type="text" name="Email" placeholder="Email-Id"><br><br>
			<label><b>Password</b></label>
			<input type="text" name="Password" placeholder="Password"><br><br>
			<button style="background-color:#6495ed;color: white;" type="submit"><b>Sign-Up</b></button>

		</form>
</body>
</html>