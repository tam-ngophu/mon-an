<html>
<head>
	<meta charset="UTF-8">
	<title>Xử lý đăng ký</title>
</head>

<body>
<?php
	
	$conn = mysqli_connect("localhost", "root", "","qlbanhang");
	$conn ->set_charset("utf8");

		$hoten = $_POST['txtHoten'];
        $gioitinh = $_POST['rdGioitinh'];
        $ngaysinh = $_POST['dateNS'];
        $email = $_POST['E-mail'];
        $taikhoan = $_POST['txtTaikhoan'];
        $matkhau = md5($_POST['inputPassword1']);
        $nhaplaimatkhau = md5($_POST['inputPassword2']);
        $cmnd = $_POST['txtCMND'];
        $diachi = $_POST['txtDiachi'];

	
  
        
        $sql = "insert into khachhangshop (HotenKH,sdtKH,pwMatKhauKH,GioiTinhKH,NgaySinhKH,emailKH,CMNDKH,DiaChi) 
        values('$hoten','$taikhoan','$matkhau','$gioitinh','$ngaysinh','$email','$cmnd','$diachi')";

        $result=$conn->query($sql);
        if($result){
           header('location: dangnhap.html');
           
		}else {
			echo"dang ky that bai";
			header('location: dangky.html');
		}
		
       $conn->close();
?>
</body>
</html>