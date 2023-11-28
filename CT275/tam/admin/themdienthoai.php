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
    <title>Thêm điện thoại</title>

    <script>
        function kiemtra(str) {
            if (str.length == 0) {
                document.getElementById("txtMSDT").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
    
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("loi1").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "ktrathemdt.php?q=" + str, true);
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
        .container{
            border: 1px solid #ccc;
        }
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
       #themsp{
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
            <form name="frmthemdienthoai" id="frmthemdienthoai" method="post" action="xulythemdt.php" novalidate="true" onsubmit="return test()" enctype="multipart/form-data">
                <div class="alert-danger">
                    <!-- <p id="loi1"class="color"></p>
                    <p id="loi2"class="color"></p>
                    <p id="loi3"class="color"></p>
                    <p id="loi4"class="color"></p>
                    <p id="loi5"class="color"></p>
                    <p id="loi6"class="color"></p>
                    <p id="loi7"class="color"></p>
                    <p id="loi8"class="color"></p>
                    <p id="loi9"class="color"></p>  
                    <p id="loi10"class="color"></p>  
                    <p id="loi11"class="color"></p>   -->
                </div>
                
                <div class="form-row">
                    <div class="col-md-12 mx-auto">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 style="color: red;">Thêm điện thoại mới</h1>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="txtMSDT" class="col-sm-2 col-form-label">MSDT</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtMSDT" name="txtMSDT" onkeyup="kiemtra(this.value)">
                                    <small id="loi1" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="txtMSCTDT" class="col-sm-2 col-form-label">MSCTDT</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtMSCTDT" name="txtMSCTDT" v-model="nhapht">
                                    <small id="loi2" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="txtMNDT" class="col-sm-2 col-form-label">Mã nhóm</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtMNDT" name="txtMNDT" v-model="nhapht">
                                    <small id="loi3" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="txtTenDT" class="col-sm-2 col-form-label">Tên</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtTenDT" name="txtTenDT" v-model="nhapht">
                                    <small id="loi4" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="txtGiaDT" class="col-sm-2 col-form-label">Giá</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtGiaDT" name="txtGiaDT" v-model="nhapht">
                                    <small id="loi5" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="SoLuongDT" class="col-sm-2 col-form-label">Số lượng</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="SoLuongDT" name="SoLuongDT" v-model="nhapht">
                                    <small id="loi6" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="img" class="col-sm-2 col-form-label">Ảnh 1</label>
                                    <div class="col-sm-10">
                                    <input type="file" id="img" name="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="Anh2" class="col-sm-2 col-form-label">Ảnh 2</label>
                                    <div class="col-sm-10">
                                    <input type="file"  id="Anh2" name="Anh2" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="Anh3" class="col-sm-2 col-form-label">Ảnh 3</label>
                                    <div class="col-sm-10">
                                    <input type="file"  id="Anh3" name="Anh3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-left: 230px">
                                    <button type="submit" name="themsp" id="themsp" class="btn btn-outline-primary">Thêm</button>
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
    
    if(document.getElementById("txtMSDT").value ==""){
        document.getElementById("loi1").innerHTML="Vui lòng nhập mã số điện thoại!";
        check=false;
    }else if(document.getElementById("txtMSDT").length < 2){
        document.getElementById("loi1").innerHTML="Vui lòng nhập mã số điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi1").innerHTML="";
    }

    if(document.getElementById("txtMSCTDT").value ==""){
        document.getElementById("loi2").innerHTML="Vui lòng nhập mã số chi tiết điện thoại!";
        check=false;
    }else if(document.getElementById("txtMSCTDT").length < 2){
        document.getElementById("loi2").innerHTML="Vui lòng nhập mã số chi tiết điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi2").innerHTML="";
    }

    if(document.getElementById("txtMNDT").value ==""){
        document.getElementById("loi3").innerHTML="Vui lòng nhập nhóm điện thoại!";
        check=false;
    }else if(document.getElementById("txtMNDT").length < 2){
        document.getElementById("loi3").innerHTML="Vui lòng nhập nhóm điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi3").innerHTML="";
    }

    if(document.getElementById("txtTenDT").value ==""){
        document.getElementById("loi4").innerHTML="Vui lòng nhập tên điện thoại!";
        check=false;
    }else if(document.getElementById("txtTenDT").length < 2){
        document.getElementById("loi4").innerHTML="Vui lòng nhập tên điện thoại ít nhất 2 ký tự!";
        check=false;
    }else {
        document.getElementById("loi4").innerHTML="";
    }

    
    if(document.getElementById("txtGiaDT").value ==""){
        document.getElementById("loi5").innerHTML="Vui lòng nhập giá điện thoại";
        check=false;
    }else if(document.getElementById("txtGiaDT").length < 5){
        document.getElementById("loi5").innerHTML="Vui lòng nhập giá điện thoại ít nhất 5 ký tự!";
        check=false;
    }else {
        document.getElementById("loi5").innerHTML="";
    }
    
    if(document.getElementById("SoLuongDT").value ==""){
        document.getElementById("loi6").innerHTML="Vui lòng nhập số lượng điện thoại!";
        check=false;
    }else if(document.getElementById("SoLuongDT").length < 1){
        document.getElementById("loi6").innerHTML="Vui lòng nhập số lượng điện thoại ít nhất 1 ký tự!";
        check=false;
    }else {
        document.getElementById("loi6").innerHTML="";
    }

    if(check==true){
        alert("Thêm điện thoại thành công");
    }else{
        alert("Thêm điện thoại không thành công, vui lòng kiểm tra lổi của bạn");
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