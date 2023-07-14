<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
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
   <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
   ?>
	<div class="box">
		<form autocomplete="off" action="" method="post">
			<h2 class="text">GAMER STATION</h2>
			<div class="inputBox">
				<input type="email" name="email" required="required">
				<span>username</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="email" name="email" required="required">
				<span>email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="required">
				<span>password</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="cpassword" name="cpassword" required="required">
				<span>conform password</span>
				<i></i>
			</div>
         <select name="user_type" class="box">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
			<?php
			session_start();
			if(isset($_SESSION['message'])) {
				echo '<p class="error-message">' . $_SESSION['message'] . '</p>';
				unset($_SESSION['message']);
			}
			?>
			<input type="submit" value="submit" name="submit">
         <p>already have an account? <a href="login.php">login now</a></p>
		</form>
	</div>
</body>
</html>