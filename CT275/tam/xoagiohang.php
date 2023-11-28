<?php
    session_start();
    $id = $_GET['muadt'];
    if(isset($_SESSION['gioHang']));
        unset($_SESSION['gioHang'][$id]);
        header('location: giohang.php')
?>