<?php
session_start();

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Xử đăng nhập</title>
</head>

<body>
<?php
	
	if(isset($_POST['login'])){
		$username = $_POST['txtDangNhapTK'];
		$password = md5($_POST['pwDangNhapPassword']);

		$conn = mysqli_connect("localhost", "root", "","qlbanhang");
		$conn-> set_charset("utf8");
		$sql = "select * from khachhangshop where sdtKH='$username' and pwMatKhauKH='$password'";
		
		$result = mysqli_query($conn, $sql);
		$check = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);

		if ( $check==1) {
			$_SESSION['HotenKH']=$username;
			header('location: index.php');
		}else {
			header('location: dangnhap.html') ;
		echo "<script>";
		echo "alert('Đăng nhập không thành công.')";
		echo "</script>";
		}
		
	}

?>

</body>
</html>
