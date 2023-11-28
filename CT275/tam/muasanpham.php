<?php
    session_start();
    $kh = $_SESSION['HotenKH'];
    $today = date("Y-m-d");

    $conn = mysqli_connect("localhost","root","","qlbanhang");
    $sql = "select MSKH from khachhangshop where sdtKH='$kh'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        $MSKH = $row['MSKH'];
    }
    
    $sql1="insert into datdienthoai(MSKH,NgayDH,TrangThai) values('$MSKH','$today','0')";
    $result1 = mysqli_query($conn,$sql1);

    //lay msddt cua khach hang moi insert vao
    $layMSDDT = "select MSDDT from datdienthoai ORDER BY MSDDT DESC LIMIT 1";
    $result2 = $conn->query($layMSDDT);
    //Lấy id đơn đặt hàng
    while($row = mysqli_fetch_assoc($result2)){
        $MSDDT = $row['MSDDT'];
        
    }
    // echo $MSDDT;
    //chi tiết đơn
    foreach($_SESSION['gioHang'] as $cart){
        $key = $cart['muadt'];
        $sql3="select *from dienthoai where MSDT='$key'";
        $result3=$conn->query($sql3);
        $value = $cart['soluong'];
        // if($result3){
        //     echo "thanh cong";
        // }else echo"that bai";
        while($row=$result3->fetch_assoc()){
            $giadt = $row['GiaDT']*$cart['soluong'];
            $sql4 ="insert into chitietdondathang (MSDDT,MSKH, MSDT, SoLuongDDH, GiaDDH) values('$MSDDT','$MSKH','$key','$value','$giadt')";
            $result4= $conn->query($sql4);
        }
        // if($result4){
        //     echo "thanh cong";
        // }else echo"that bai";
        $slconlai = 0;
        $sql5="select * from dienthoai where MSDT='$key'";
        $result5 = $conn->query($sql5);
        while($row = $result5->fetch_assoc()){
            $slconlai = $row['SoLuongDT'] - $value;
        }
        $sql6 = "update dienthoai set SoLuongDT = '$slconlai' where MSHH='$key'";
        $result6 = $conn->query($sql6);
        unset($_SESSION['gioHang'][$key]);
    }
    echo"<script>";
    echo"alert('Mua hàng thành công.')";
    echo"</script>";
    header("refresh:0.0001;url=index.php");
    
?>