<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="b.css">
	<style>
		.error-message {
			color: red;
			margin-top: 5px;
			font-size: 14px;
		}
	</style>
</head>
<body>
	<div class="box">
		<form autocomplete="off" action="signin.php" method="post">
			<h2 class="text">GAMER STATION</h2>
			<div class="inputBox">
				<input type="text" name="username" required="required">
				<span>username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="required">
				<span>password</span>
				<i></i>
			</div>
			<?php
			session_start();
			if(isset($_SESSION['message'])) {
				echo '<p class="error-message">' . $_SESSION['message'] . '</p>';
				unset($_SESSION['message']);
			}
			?>
			<input type="submit" value="submit" name="submit">
		</form>
	</div>
</body>
</html>

