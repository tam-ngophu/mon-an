<html>
<head>
	<meta charset="UTF-8">
	<title>Xử lý đăng ký nhân viên</title>
</head>

<body>
<?php
if(isset($_POST['singin']))	{
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
        $chucvu = $_POST['txtChucvu'];
        $diachi = $_POST['txtDiachi'];

	
  
        
        $sql = "insert into nhanvienshop (TenNV,sdtNV,pwMatKhauNV,GioiTinhNV,NgaySinhNV,emailNV,CMNDNV,ChucVu,DiaChiNV) 
        values('$hoten','$taikhoan','$matkhau','$gioitinh','$ngaysinh','$email','$cmnd','$chucvu','$diachi')";

        $result=$conn->query($sql);
        if($result){
            
           header('location: loginadmin.php');
           
		}else {
			echo"dang ky that bai";
			header('location: dangkynv.php');
		}
		
       $conn->close();
}
?>
</body>
</html>