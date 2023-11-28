<?php

    $MSCTDT = $_GET['q'];
    include_once("../dbconnect.php");
    $sql ="select MSCTDT from chitietdienthoai";
    $result=mysqli_query($conn,$sql);
    
    while($row=mysqli_fetch_array($result)){
        if($MSCTDT !== ""){
            foreach($row as $MSCTDT1){

            }
            if($MSCTDT == $MSCTDT1){
                // echo'<span style="color: red;">
                // Số điện thoại tồn tại
                // </span>';
                echo"Mã số tồn tại!";
            }
        }
    }

?>