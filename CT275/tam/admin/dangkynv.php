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
    <title>Đăng ký tài khoản</title>
    <script>
        function kiemtra(str) {
            if (str.length == 0) {
                document.getElementById("txtTaikhoan").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
    
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("loi3").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "ktradknv.php?q=" + str, true);
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
       #singin{
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
            <form name="frmLienHe" id="frmLienHe" method="post" action="xulydangkynv.php" novalidate="true" onsubmit="return test()">
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
                                <h1 style="color: red;">Đăng ký tài khoản</h1>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-top: 22px">
                                    <label for="txtHoten" class="col-sm-2 col-form-label">Họ&Tên</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtHoten" name="txtHoten" v-model="nhapht">
                                    <small id="loi1" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Giớitính</label>
                                    <div class="col-sm-2" style="margin-top: 7px; text-align: right;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rdGioitinh" id="rdGioitinh1" checked value="nam" v-model="nhapgt">
                                            <label class="form-check-label" for="rdGioitinh1" >Nam</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="margin-top: 7px;padding-left: 0;">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rdGioitinh" id="rdGioitinh2" value="nu" v-model="nhapgt">
                                            <label class="form-check-label" for="rdGioitinh2">Nữ</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="dateNS" class="col-sm-2 col-form-label">Ngàysinh</label>
                                    <div class="col-sm-10">
                                    <input type="date" class="form-control" id="dateNS" name="dateNS" v-model="nhapns">
                                    <small id="loi2" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="E-mail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" v-model="nhapemail" id="E-mail" name="E-mail" placeholder="ABC@gmai.com">
                                    <small id="loi9" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="txtTaikhoan" class="col-sm-2 col-form-label">Account</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" onkeyup="kiemtra(this.value)" id="txtTaikhoan" name="txtTaikhoan" placeholder="Nhập số điện thoại">
                                      <small id="loi3" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="inputPassword1" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" v-model="nhapmk" id="inputPassword1" name="inputPassword1">
                                      <small id="loi4" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">Nhập lại Password</label>
                                    <div class="col-sm-10" style="margin-top: 12px;">
                                      <input type="password" class="form-control" v-model="nhaplaimk" id="inputPassword2" name="inputPassword2">
                                      <small id="loi5" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="txtCMND" class="col-sm-2 col-form-label">CMND</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" v-model="nhapcmnd" id="txtCMND" name="txtCMND">
                                      <small id="loi6" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="txtChucvu" class="col-sm-2 col-form-label">Chức vụ</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" v-model="txtChucvu" id="txtChucvu" name="txtChucvu">
                                      <small id="loi7" class="form-text" style="color: red!important;"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="txtDiachi" class="col-sm-2 col-form-label">Địachỉ</label>
                                    <div class="col-sm-10">
                                    <textarea name="txtDiachi" id="txtDiachi" v-model="nhapdc" cols="50" rows="4"></textarea>
                                    <small id="loi8" class="form-text" style="color: red!important;"></small>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row" style="margin-left: 230px">
                                    <button type="submit" name="singin" id="singin" class="btn btn-outline-primary">Đăng ký</button>
                                    <!-- <a href="#search1"><button type="submit" class="btn btn-outline-primary">Đăng ký</button></a> -->
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
    
    if(document.getElementById("txtHoten").value ==""){
        document.getElementById("loi1").innerHTML="Vui lòng nhập Họ tên!";
        check=false;
    }else if(document.getElementById("txtHoten").length < 5){
        document.getElementById("loi1").innerHTML="Vui lòng nhập Họ tên ít nhất 5 ký tự!";
        check=false;
    }else {
        document.getElementById("loi1").innerHTML="";
    }

    if(document.getElementById("dateNS").value ==""){
        document.getElementById("loi2").innerHTML="Vui lòng nhập ngày sinh!";check=false;
    }else {
        document.getElementById("loi2").innerHTML="";
    }

    if(document.getElementById("txtTaikhoan").value ==""){
        document.getElementById("loi3").innerHTML="Vui lòng nhập số điện thoại của bạn!";check=false;
    }else if(document.getElementById("txtHoten").length < 5){
        document.getElementById("loi3").innerHTML="Vui lòng nhập số điện thoại thật của bạn!";check=false;
    }else {
        document.getElementById("loi3").innerHTML="";
    }

    if(document.getElementById("inputPassword1").value ==""){
        document.getElementById("loi4").innerHTML="Vui lòng nhập password!";check=false;
    }else if(document.getElementById("inputPassword1").length < 3){
        document.getElementById("loi4").innerHTML="Vui lòng nhập Họ tên ít nhất 3 ký tự!";check=false;
    }else {
        document.getElementById("loi4").innerHTML="";
    }

    if(document.getElementById("inputPassword2").value =="" && document.getElementById("inputPassword1").value !=""){
        document.getElementById("loi5").innerHTML="Vui lòng nhập lại password!";check=false;
    }else if(document.getElementById("inputPassword2").value =="" && document.getElementById("inputPassword1").value ==""){
        document.getElementById("loi5").innerHTML="";check=false;
    }else if(document.getElementById("inputPassword2").value != document.getElementById("inputPassword1").value){
        document.getElementById("loi5").innerHTML="Vui lòng nhập password giống như trên!";check=false;
    }else {
        document.getElementById("loi5").innerHTML="";
    }

    if(document.getElementById("txtCMND").value ==""){
        document.getElementById("loi6").innerHTML="Vui lòng nhập CMND!";check=false;
    }else if(document.getElementById("txtCMND").length < 5){
        document.getElementById("loi6").innerHTML="Vui lòng nhập CMND ít nhất 5 ký tự!";check=false;
    }else {
        document.getElementById("loi6").innerHTML="";
    }

    if(document.getElementById("txtChucvu").value ==""){
        document.getElementById("loi7").innerHTML="Vui lòng nhập Chức vụ!";check=false;
    }else if(document.getElementById("txtChucvu").length < 2){
        document.getElementById("loi7").innerHTML="Vui lòng nhập Chức vụ ít nhất 2 ký tự!";check=false;
    }else {
        document.getElementById("loi7").innerHTML="";
    }

    if(document.getElementById("txtDiachi").value ==""){
        document.getElementById("loi8").innerHTML="Vui lòng nhập địa chỉ!";check=false;
    }else if(document.getElementById("txtDiachi").length < 5){
        document.getElementById("loi8").innerHTML="Vui lòng nhập địa chỉ ít nhất 5 ký tự!";check=false;
    }else {
        document.getElementById("loi8").innerHTML="";
    }
    //check email
    var email=document.getElementById("E-mail").value;
    if(ktraemail(email)){
        document.getElementById("loi9").innerHTML="";
    }else if(email ==""){
        document.getElementById("loi9").innerHTML="Vui lòng nhập email";
    }else{
        document.getElementById("loi9").innerHTML="Vui lòng nhập email đúng dạng abc@gmail.com";
    }
    if(check==true){
        alert("đăng ký thành công");
    }else{
        alert("đăng ký không thành công, vui lòng kiểm tra lổi của bạn");
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