<?php

    $MNDT = $_GET['q'];
    include_once("../dbconnect.php");
    $sql ="select MNDT from nhomdienthoai";
    $result=mysqli_query($conn,$sql);
    
    while($row=mysqli_fetch_array($result)){
        if($MNDT !== ""){
            foreach($row as $MNDT1){

            }
            if($MNDT == $MNDT1){
                // echo'<span style="color: red;">
                // Số điện thoại tồn tại
                // </span>';
                echo"Mã nhóm tồn tại!";
            }
        }
    }

?>