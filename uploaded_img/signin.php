<?php
include 'config.php';
session_start();

if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$select = mysqli_query($conn, "SELECT * FROM `signin` WHERE username = '$username' AND password = '$password'") or die('query failed');

	if(mysqli_num_rows($select) > 0){
		$row = mysqli_fetch_assoc($select);
		$_SESSION['user_id'] = $row['id'];
		header('location: home.php');
	} else {
		$_SESSION['message'] = 'اسم المستخدم أو كلمة المرور غير صحيحة!';
		header('location: index.php');
	}
}
?>
