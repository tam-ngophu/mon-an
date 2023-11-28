<?php
session_start();
if(!isset($_SESSION['sdtNV'])){
	header("Location: loginadmin.php");
}
?>
<html >
	<head>
	 
	</head>
	<body>
			<?php
				if(isset($_POST['duyet'])){
					
					if (isset($_POST['MSD'])) {
						foreach($_POST['MSD'] as $value) {
							$x="Xác nhận";
							include_once(__DIR__.'/../dbconnect.php');
							$ctdh = "select * from chitietdondathang where MSDDT='$value'";
							
							//Lấy MSHH từ bảng chi đặt hàng thông qua $valuelà SoDonDH
							$ctdathang = mysqli_fetch_array(mysqli_query($conn,$ctdh));
							
							//Lấy số lượng hàng hóa từ bảng hàng hóa
							$dt = "select * from dienthoai where MSDT='".$ctdathang['MSDT']."'";
							$dienthoai = mysqli_fetch_array(mysqli_query($conn, $dt));
							//Cập nhật số lượng hàng hóa
							$soluong = $dienthoai['SoLuongDT'] - $ctdathang['SoLuongDDH'];
							
							$uphh = "update dienthoai set SoLuongDT='".$soluong."' where MSDT='".$ctdathang['MSDT']."'";
							$uphanghoa = mysqli_query($conn, $uphh);
							
							$nv = "select * from nhanvienshop where sdtNV='".$_SESSION['sdtNV']."'";
							$nhanvien = mysqli_fetch_array(mysqli_query($conn, $nv));
							//Cập nhật trạng thái
							$updh = "update datdienthoai set TrangThai='".$x."',MSNV='".$nhanvien['MSNV']."' where MSDDT='".$value."'";
							$updathang = mysqli_query($conn, $updh);
						}
						header("Location: admin.php");
						// echo "Bạn đã xác nhận đơn thành công.<a href='admin.php'>Click vào để quay lại</a>";
						
					}
					header("Location: admin.php");
					// echo "Bạn cần chọn đơn hàng.<a href='admin.php'>Click vào để quay lại</a>";
				}
	?>
	</body>
</html>
