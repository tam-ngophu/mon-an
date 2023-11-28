<?php
if(isset($_POST['themsp'])){
    include_once(__DIR__.'/../dbconnect.php');
    $MSDT = $_POST['txtMSDT'];
    $MSCTDT = $_POST['txtMSCTDT'];
    $MNDT = $_POST['txtMNDT'];
    $TenDT = $_POST['txtTenDT'];
    $GiaDT = $_POST['txtGiaDT'];
    $Soluong = $_POST['SoLuongDT'];

    $tenfile1 = $_FILES['img']['name'];
    $ndfile1 = $_FILES['img']['tmp_name'];
    $duongdan1 = "asset/img/phone/".$tenfile1;
    copy($ndfile1,$duongdan1);

    $tenfile2 = $_FILES['Anh2']['name'];
    $ndfile2 = $_FILES['Anh2']['tmp_name'];
    $duongdan2 = "asset/img/phone/".$tenfile2;
    copy($ndfile2,$duongdan2);

    $tenfile3 = $_FILES['Anh3']['name'];
    $ndfile3 = $_FILES['Anh3']['tmp_name'];
    $duongdan3 = "asset/img/phone/".$tenfile3;
    copy($ndfile3,$duongdan3);
    
    $sql = "INSERT INTO dienthoai
	(MSDT,MSCTDT,MNDT,TenDT,GiaDT,SoLuongDT,HinhAnh,HinhCT1,HinhCT2)
	VALUES ('$MSDT', '$MSCTDT', '$MNDT', '$TenDT', '$GiaDT', '$Soluong','$duongdan1','$duongdan2','$duongdan3')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo'<script>
        alert("Thêm điện thoại thành công");
        </script>';
        header('location: dienthoai.php');
    }else{
        echo'<script>
        alert("Thêm điện thoại không thành công");
        </script>';
        header("location: themdienthoai.php");
    } 
}
?>
