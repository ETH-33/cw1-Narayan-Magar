<?php

include 'config.php';
// session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>




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
		<form autocomplete="off" action="" method="post">
			<h2 class="text">GAMER STATION</h2>
			<div class="inputBox">
				<input type="email" name="email" required="required">
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
         <p>don't have an account? <a href="register.php">register now</a></p>
		</form>
	</div>
</body>
</html>








