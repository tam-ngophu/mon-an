<?php
session_start();
if(!isset($_SESSION['sdtNV'])){
	header("Location: loginadmin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm nhóm điện thoại</title>
    <script>
        function kiemtra(str) {
            if (str.length == 0) {
                document.getElementById("MNDT").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
    
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("loi1").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "ktrathemndt.php?q=" + str, true);
            xmlhttp.send();
            }
        }
    </script> 
</head>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../asset/css/cs.css">
    <link rel="shortcut icon" href="../asset/img/logo/logo3.PNG">
    <style>
       .color{
           color: red;
           padding-left: 20px;
           
       }
       .dong{
           margin:auto 350px;
       }
       body{
           background-color: #ccc;
       }
       #save{
           margin: 0px 10px;
           width: 10rem;
           height: 3rem;
           font-size: 20px
       }
       .canphai{
            margin-left: 275px;
        }
        .mau{
            font-weight: bold;
            color: RebeccaPurple;
            line-height: 2;
        }
        .dam{
            font-weight: bold;
        }
        .img{
            width: 5rem;
            height: 5rem;
        }
        .width{
            width: 160px;
        }
        .bg{
          background-color: black;
          
        }
        .bg a{
          color: white;
        }
        body{
          background-color: #7f165f59;
        }
    </style>
<body>
<?php include_once(__DIR__.'/thanhnav.php'); ?>



    <!-- Đăng ký -->
    <div id="dangky" class="dong">
        <div class="container backgroudnencontainer ">
            <form name="frmthemdienthoai" id="frmthemdienthoai" method="post" action="xulythemnhomdt.php" novalidate="true" onsubmit="return test()" enctype="multipart/form-data">
                <div class="alert-danger">
                    <!-- <p id="loi1"class="color"></p>
                    <p id="loi2"class="color"></p> -->
                </div>
                
                <div class="form-row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 style="color: red;">Thêm nhóm điện thoại mới</h1>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="MNDT" class="col-sm-2 col-form-label">MNDT</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="MNDT" name="MNDT" onkeyup="kiemtra(this.value)">
                                    <small id="loi1" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="TenNDT" class="col-sm-2 col-form-label">Tên nhóm</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="TenNDT" name="TenNDT" v-model="nhapht">
                                    <small id="loi2" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-left: 230px">
                                    <button type="submit" name="save" id="save" class="btn btn-outline-primary">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../asset/js/app.js"></script>
    <script src="../vendor/vuejs/vue.js"></script>

<script>
function test(){
    var check =true;
    
    if(document.getElementById("MNDT").value ==""){
        document.getElementById("loi1").innerHTML="Vui lòng nhập mã nhóm điện thoại!";
        check=false;
    }else if(document.getElementById("MNDT").length < 2){
        document.getElementById("loi1").innerHTML="Vui lòng nhập mã nhóm điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi1").innerHTML="";
    }

    if(document.getElementById("TenNDT").value ==""){
        document.getElementById("loi2").innerHTML="Vui lòng nhập tên nhóm điện thoại!";
        check=false;
    }else if(document.getElementById("TenNDT").length < 2){
        document.getElementById("loi2").innerHTML="Vui lòng nhập tên nhóm điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi2").innerHTML="";
    }

    if(check==true){
        alert("Thêm nhóm điện thoại thành công");
    }else{
        alert("Thêm nhóm điện thoại không thành công, vui lòng kiểm tra lổi của bạn");
    }
    return check;
    
}
function ktraemail(email){
    email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return email_check.test(email)
}
    </script>  
    

</body>
</html>