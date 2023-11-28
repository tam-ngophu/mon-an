<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
</head>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/cs.css">
    <link rel="shortcut icon" href="asset/img/logo/logo3.PNG">
<style>
    .color{
           color: red;
           padding-left: 20px;
           
    }
</style>
<body>
<nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href=""><img src="asset/img/logo/logo3.PNG" alt="T A M Shop" width="160px" height="50px"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="maunen collapse navbar-collapse navbar-dark bg-primary" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Trang Chủ</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Liên Hệ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="giohang.php">Giỏ Hàng</a>
            </li>
            
        </ul>
          <form class="form-inline my-2 my-lg-0 paddingSearch">
            <input style="margin-left: 143px;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0 bgroudsearch" type="submit">Search</button>
          </form>
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item dropdown">
            
              <?php
              //session_start();
              if(isset($_SESSION['HotenKH'])){
                $conn = mysqli_connect("localhost","root","","qlbanhang");
                $sql = "select * from khachhangshop where sdtKH= '".$_SESSION['HotenKH']."'";
                $conn -> set_charset("utf-8");
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                echo'
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$row['sdtKH'].'
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="dangxuat.php">Đăng Xuất</a>
                  </div>
                </div>
                ';
              }else{
                echo'
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tài khoản
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="dangnhap.html">Đăng nhập</a>
                    <a class="dropdown-item" href="dangky.html">Đăng ký</a>
                  </div>
                </div>
                ';
              }
            ?>
            </li>
           
            
        </ul>
        </div>
</nav>
    <div id="lienhe">
        <div class="container-fluid">
            <form name="frmLienHe" id="frmLienHe" method="post" action="xulylienhe.php" novalidate="true" onsubmit="return test()">
                
                <div class="form-row">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4672.153574454919!2d105.77768486470248!3d10.033587924121381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0881fa25557af%3A0x350619b0d40fc3b4!2zS2h1IDMgLSDEkOG6oWkgaOG7jWMgQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1599743498771!5m2!1svi!2s" width="600" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6" style="padding-left: 50px;">
                        <div class="form-row">
                            <div class="col">
                                <h2>Liên Hệ</h2>
                            </div>
                        </div>
                        <div class="form-row mt-4" v-for="ct in chitietlienhe">
                            <div class="col">
                                <h6>{{ct.ten1}}</h6>
                                <b>{{ct.ten2}}</b>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            <div class="col"><h3>Gửi thắc mắc tới chúng tôi</h3></div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="alert " role="alert">
                                    <p id="loi1"class="color"></p>
                                    <p id="loi2"class="color"></p>
                                    <p id="loi3"class="color"></p>
                                    <p id="loi4"class="color"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" id="txtHovaten" name="txtHovaten" v-model="nhapht" placeholder="Tên của bạn">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-sm-5">
                                        <input type="email" class="form-control" id="txte-mail" name="txte-mail" v-model="nhapemail" placeholder="Email của bạn">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="txtdienthoai" name="txtdienthoai" v-model="nhapsdt" placeholder="Số điện thoại ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <textarea name="textearend" id="textearend" cols="60" v-model="nhapnd" rows="5" placeholder="    nội dung"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group row " style="margin-left: 180px">
                                    <button type="submit" name="sublienhe" id="sublienhe" class="btn btn-outline-primary">Gửi phản hồi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" id="diachi">
      <ul>
        <li>&copy;2020 Công ty cổ phần điện thoại thông minh (TAMShop). Địa chỉ: đường 3/2 Hưng Lợi - Ninh Kiều TP.CầnThơ. sđt: (03)33201099 . <br> Email: tamshop@gmail.com</li>
      </ul>
    </div>
  </div>
</div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/popperjs/popper.min.js"></script>
    <script src="vendor/vuejs/vue.js"></script>
    <script src="asset/js/app.js"></script>
    


    <script>
        
        var vue = new Vue({
            el: '#lienhe',
            data: {
                chitietlienhe: [
                    {id:1, ten1: "Địa chỉ chúng tôi",ten2:"hẻm 216/6, đường 3/2,P.Hưng Lợi ,Q.Ninh Kiều,TP.Cần Thơ"},
                    {id:2, ten1:"E-mail chúng tôi",ten2:"tamshop@gmail.com"},
                    {id:3, ten1:"Điện thoại",ten2:"0377056951"},
                    {id:4, ten1:"Thời gian làm việc",ten2:"Thứ 2 đến Thứ 6 từ 8h đến 18h; Thứ 7 và Chủ nhật từ 8h00 đến 17h00"},
                ],
            },
        });
   
</script>
<script>

     function test(){
        var check =true;
    
        if(document.getElementById("txtHovaten").value ==""){
            document.getElementById("loi1").innerHTML="Vui lòng nhập Họ tên!";
            check=false;
        }else if(document.getElementById("txtHovaten").length < 2){
            document.getElementById("loi1").innerHTML="Vui lòng nhập Họ tên ít nhất 2 ký tự!";
            check=false;
        }else {
            document.getElementById("loi1").innerHTML="";
        }

        if(document.getElementById("txtdienthoai").value ==""){
            document.getElementById("loi2").innerHTML="Vui lòng nhập số điện thoại của bạn!";
            check=false;
        }else if(document.getElementById("txtdienthoai").length < 10){
            document.getElementById("loi2").innerHTML="Vui lòng nhập Họ tên ít nhất 10 ký tự!";
            check=false;
        }else {
            document.getElementById("loi2").innerHTML="";
        }


        if(document.getElementById("textearend").value ==""){
            document.getElementById("loi3").innerHTML="Vui lòng nhập nội dung mà bạn muốn phản hồi!";
            check=false;
        }else if(document.getElementById("textearend").length < 10){
            document.getElementById("loi3").innerHTML="Vui lòng nhập Họ tên ít nhất 10 ký tự!";
            check=false;
        }else {
            document.getElementById("loi3").innerHTML="";
        }

        var email1=document.getElementById("txte-mail").value;
        if(ktraemail1(email1)){
            document.getElementById("loi4").innerHTML="";
        }else if(email1 ==""){
            document.getElementById("loi4").innerHTML="Vui lòng nhập email";check =false;
        }else{
            document.getElementById("loi4").innerHTML="Vui lòng nhập email đúng dạng abc@gmail.com";check =false;
        }

        // if(check==true){
        //     alert("Ý kiến của bạn đã được gữi đi, chúng tôi sẽ phản hồi sớm nhất cho bạn, cảm ơn bạn!!!")
        // }else{
        //     alert("Phản hồi không thành công, vui lòng kiểm tra lỗi của bạn");
        // }
        return check;
    }

    function ktraemail1(email1){
        email_check = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        return email_check.test(email1);
    }
</script>
</body>
</html>