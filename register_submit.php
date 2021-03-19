<?php 
	session_start();
	include 'config.php';
	if (isset($_POST['submit']) && $_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && $_POST['repassword'] != '' ) {
		# code...
		// Thực hiện xử lý khi nhấn nút submit và đã điền đầy đủ thông tin
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		//mã hóa password
		$password = md5($password);

		if ($password != $repassword) {
			# code...
			$_SESSION["thôgn báo"] = "Password nhập lại không chính xác!";
			header("location:register.php");
			die();
		}
		$sql = "SELECT * FROM user WHERE username = '$username'";
		//Xét xem có trùng tài khoản không?

		$old = mysqli_query($conn,$sql);
		if (mysqli_num_rows($old) > 0) {
			# code...
			$_SESSION["thôgn báo"] = "Tên đăng nhập đã tồn tại!";
			header("location:register.php");
		}

		$sql = "INSERT INTO user (username, email, password) VALUES ('$username','$email','$password')";
		mysqli_query($conn,$sql);
		$_SESSION["thông báo"] = "Đăng kí thành công!";
		header("location:login.php");
	}
	else{
		$_SESSION["thôgn báo"] = "Vui lòng nhập đầy đủ thông tin!";
		header("location:register.php");
	}

 ?>

