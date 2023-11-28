<?php
if(isset($_POST['themctsp'])){
    include_once(__DIR__.'/../dbconnect.php');
    $MSCTDT = $_POST['MSCTDT'];
    $ManHinh = $_POST['ManHinh'];
    $Camerasau = $_POST['Camerasau'];
    $CameraSelfile = $_POST['CameraSelfile'];
    $RAM = $_POST['RAM'];
    $BoNhoTrong = $_POST['BoNhoTrong'];
    $CHIPCPU = $_POST['CHIPCPU'];
    $GPU = $_POST['GPU'];
    $PIN = $_POST['PIN'];
    $SMS = $_POST['SMS'];
    $HeDieuHanh = $_POST['HeDieuHanh'];
    $XuatXu = $_POST['XuatXu'];
    $NamSX = $_POST['NamSX'];
    
    
    
    $sql = "INSERT INTO chitietdienthoai
	(MSCTDT,ManHinh,Camerasau,CameraSelfile,RAM,BoNhoTrong,CHIPCPU,GPU,PIN,SMS,HeDieuHanh,XuatXu,NamSX)
	VALUES ('$MSCTDT', '$ManHinh', '$Camerasau', '$CameraSelfile', '$RAM', '$BoNhoTrong','$CHIPCPU','$GPU','$PIN','$SMS','$HeDieuHanh','$XuatXu','$NamSX')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo'<script>
        alert("Thêm điện thoại thành công");
        </script>';
        header('location: CTdienthoai.php');
    }else{
        echo'<script>
        alert("Thêm điện thoại không thành công");
        </script>';
        header("location: CTthemdienthoai.php");
    } 
}
?>