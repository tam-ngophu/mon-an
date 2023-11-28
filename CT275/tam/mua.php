<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mua</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/cs.css">
    <link rel="shortcut icon" href="asset/img/logo/logo3.PNG">
</head>

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
            <li class="nav-item">
              <a class="nav-link" href="lienhe.php">Liên Hệ</a>
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
              session_start();
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

      <!-- MENU -->
      <div class="container-fluid">
      <div id="menu1">
        <ul>
          <li class="text-left">Điện thoại</li>
          <?php
          $conn = mysqli_connect("localhost", "root", "","qlbanhang");
          $sql ="select * from dienthoai";
          $result = mysqli_query($conn,$sql);
          echo"<li><a href='samsung.php'>SAMSUNG</a>";
          echo"<li><a href='oppo.php' style='padding-left: 35px'>OPPO</a></li>";
          echo"<li><a href='iphone.php' style='padding-left: 30px'>IPHONE</a></li>";
          ?>
        </ul>
      </div>
    </div>

<!-- sản phẩm -->
<form action="themspgiohang.php" method="POST" name="frmthemsp" id="frmthemsp">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12" style="font-size: 20px;color: rgba(17, 12, 12, 0.692);">
            <?php 
                $conn = mysqli_connect("localhost", "root", "","qlbanhang");
                if(isset($_GET['submua'])){
                $MasoDT = $_GET['muadt'];
                $sql ="select * from dienthoai where MSDT='".$MasoDT."'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                    echo"<p>";
                    echo"".$row["TenDT"]."</br>";
                    echo"<b>".number_format($row["GiaDT"])." VNĐ</b>";
                    echo"</p>";
                }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <?php
        $conn = mysqli_connect("localhost", "root", "","qlbanhang");
        if(isset($_GET['submua'])){
        $MasoDT = $_GET['muadt'];
        $sql ="select * from dienthoai where MSDT='".$MasoDT."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
            echo"<div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>";
                echo"<ol class='carousel-indicators'>";
                    echo"<li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>";
                    echo"<li data-target='#carouselExampleIndicators' data-slide-to='1'></li>";
                    echo"<li data-target='#carouselExampleIndicators' data-slide-to='2'></li>";
                echo"</ol>";
                echo"<div class='carousel-inner'style='width: 500px; height: 500px;'>";
                echo"<div class='carousel-item active'>";
                    echo"<img src='".$row['HinhAnh']."' class='d-block w-100 img-fluid' alt='...'>";
                echo"</div>";
                echo"<div class='carousel-item'>";
                    echo"<img src='".$row['HinhCT1']."' class='d-block w-100 img-fluid' alt='...'>";
                echo"</div>";
                echo"<div class='carousel-item'>";
                    echo"<img src='".$row['HinhCT2']."' class='d-block w-100 img-fluid' alt='...'>";
                echo"</div>";
                echo"<form method = 'get' action = 'themspgiohang.php'>";
                echo"<input type='text' name='muadt' class='MSDT' value='".$row['MSDT']."'>";
                echo"<input type='text' name='txtctdt' class='MSDT' value='".$row['MSCTDT']."'>";
                echo"<button type='submit' class='btn btn-link' name='submua'><i style='font-size: 13px;'>".$row['TenDT']." <br> ".$row['GiaDT']."</i></button>";
                echo"</form>";
                echo"</div>";
                    echo"<a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>";
                        echo"<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
                        echo"<span class='sr-only'>Previous</span>";
                    echo"</a>";
                    echo"<a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>";
                        echo"<span class='carousel-control-next-icon' aria-hidden='true'></span>";
                        echo"<span class='sr-only'>Next</span>";
                    echo"</a>";
                echo"</div>";
            echo"</div>";
        }
        ?>
        <div class="col-md-6 text-left" style="padding-left: 143px;border-left:2px solid #ccc;">
            <?php
                $conn = mysqli_connect("localhost", "root", "","qlbanhang");
                if(isset($_GET['submua'])){
                $MasoCTDT = $_GET['txtctdt'];
                $sql ="select * from chitietdienthoai where MSCTDT='".$MasoCTDT."'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                echo"<div class='row' style='margin-bottom: 23px;'>";
                echo"<div class='col-md-12 text-center'><h4>Thông số kỹ thuật</h4></div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Màn hình</div>";
                echo"<div class='col-md-8'>".$row['ManHinh']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Camera sau</div>";
                echo"<div class='col-md-8'>".$row['Camerasau']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Camera Selfie</div>";
                echo"<div class='col-md-8'>".$row['CameraSelfile']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>RAM</div>";
                echo"<div class='col-md-8'>".$row['RAM']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Bộ nhớ trong</div>";
                echo"<div class='col-md-8'>".$row['BoNhoTrong']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>CPU</div>";
                echo"<div class='col-md-8'>".$row['CHIPCPU']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>GPU</div>";
                echo"<div class='col-md-8'>".$row['GPU']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Dung lượng pin</div>";
                echo"<div class='col-md-8'>".$row['PIN']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Thẻ sim</div>";
                echo"<div class='col-md-8'>".$row['SMS']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Hệ điều hành</div>";
                echo"<div class='col-md-8'>".$row['HeDieuHanh']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Xuất xứ</div>";
                echo"<div class='col-md-8'>".$row['XuatXu']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Năm sản xuất</div>";
                echo"<div class='col-md-8'>".$row['NamSX']."</div>";
                echo"</div>";
                echo"<div class='row'>";
                echo"<div class='col-md-4'>Số Lượng</div>";
                echo"<div class='col-md-8'><input type='number' name='soluong' id='soluong' min='1' max='99' value='1'/></div>";
                echo"</div>";
                }
            ?>

            <div class="row text-center mt-4" style="margin-top: 13px;">
                <div class="col-md-12">
                  <?php
                    // echo'<form action="themspgiohang" method="get" name="frmthemgiohang">';
                    // echo"<input type='text' name='muadt1' class='MSDT' value='".$row['MSDT']."'>";
                    // echo'</form>';
                  ?>
                    <button type="submit" name="dathang" id="dathang" class="btn btn-danger" data-toggle="button" aria-pressed="false" style="background-color: red;">
                        <h1>Mua ngay</h1>
                        <p> Mua hàng trong 1giờ hoặc nhận hàng tại shop</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" id="diachi">
      <ul>
        <li>&copy;2020 Công ty cổ phần điện thoại thông minh (TAMShop). Địa chỉ: đường 3/2 Hưng Lợi - Ninh Kiều TP.CầnThơ. sđt: (03)33201099 . <br> Email: tamshop@gmail.com</li>
      </ul>
    </div>
  </div>
</div>

<div id="icon">
  <a href="tel:0377056951"><img src="asset/img/logo/icontel.gif" width="70px" height="70px" alt="Điện Thoại"></a>
</div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/popperjs/popper.min.js"></script>
    <script src="asset/js/app.js"></script>
</body>
</html>