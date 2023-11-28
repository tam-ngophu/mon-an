<?php
session_start();

$conn = mysqli_connect("localhost", "root", "","qlbanhang");

if(isset($_POST['dathang'])){
    $id = $_POST['muadt'];
    $soluong = $_POST['soluong'];
    $sql = "select * from dienthoai where MSDT='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $hinh = $row['HinhAnh'];
    $ten = $row['TenDT'];
    $gia = $row['GiaDT'];
    if(!isset($_SESSION['gioHang'][$id])){
        $_SESSION['gioHang'][$id]= array(
            'muadt' => $id,
            'HinhAnh' => $hinh,
            'TenDT' => $ten,
            'soluong' => $soluong,
            'GiaDT' => $gia
        );
    }else{
        $_SESSION['gioHang'][$id]['soluong'] += $soluong;
    }
    header('location: giohang.php');
    
}
?>