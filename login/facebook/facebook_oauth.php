<?php
	session_start();
	$connection = mysqli_connect("localhost", "root", "", "login_facebook");
	mysqli_select_db($connection, "login_facebook");
	$sql = mysqli_query($connection, "SELECT * FROM `users`");
	$check_user = (mysqli_fetch_array($sql));
	if(isset($_GET['email'])) {
		$email = $_GET['email'];
		$name = $_GET['full_name'];
		$first_name = $_GET['first_name'];
		$last_name = $_GET['last_name'];
		$gender = $_GET['gender'];
		$locale = $_GET['locale'];
		$link = $_GET['link'];
		if(empty($email) || empty($name) || empty($first_name) || empty($last_name)) {
			echo 'Error: please provide us all the information from Facebook. To repeat the process, go to <a target="_blank" href="https://www.facebook.com/settings?tab=applications">Facebook application management page</a> and delete the app BlackRockProject and login again with Facebook.';
		} elseif($check_user['email'] == $email) {
			$_SESSION['user'] = $email;
			header('Location: http://localhost/login/index.php');
			exit();
		} else {
			$sql = mysqli_query($connection, "INSERT INTO `users` (`name`, `first_name`, `last_name`, `email`, `locale`, `link`, `gender`, `date_time`) VALUES ('".$name."', '".$first_name."', '".$last_name."', '".$email."', '".$locale."', '".$link."', '".$gender."', NOW())");
			if(!$sql) {
				echo 'Error';
			} else {
				$_SESSION['user'] = $email;
				header('Location: http://localhost/login/index.php');
				exit();
			}
		}
	}
?>