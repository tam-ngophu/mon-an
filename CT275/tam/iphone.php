<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung</title>
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
              <a class="nav-link" href="Lienhe.php">Liên Hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="giohang.php">Giỏ Hàng</a>
            </li>
            
        </ul>
          <form class="form-inline my-2 my-lg-0 paddingSearch" action="search.php" method="GET">
            <input style="margin-left: 143px;" class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0 bgroudsearch" name="subthanhcong" type="submit">Search</button>
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
    <!-- <div class="container-fluid">
      <div id="menu1">
        <ul>
          <li class="text-left">Điện thoại</li>
          <li><a href="Sanpham.html">SAMSUNG</a>
              <ul class="menu2">
                <li><a href="chitiet.html">Galaxy S20 Ultra</a></li>
                <li><a href="chitietkm2.html">Galaxy A71</a></li>
                <li><a href="chitietkm4.html">Galaxy Note 10 Lite</a></li>
                <li><a href="chitiet6.html">Galaxy Note 20 Ultra</a></li>
              </ul>
          </li>
          <li><a href="Sanpham.html" style="padding-left: 35px">OPPO</a>
              <ul class="menu2">
                <li><a href="chitiet5.html">OPPO Geno4</a></li>
              </ul>
          </li>
          <li><a href="Sanpham.html" style="padding-left: 30px">IPHONE</a>
            <ul class="menu2">
              <li><a href="chitietkm3.html">IPhone 11 Pro Max 64GB</a></li>
              <li><a href="chitiet7.html">IPhone 11 64GB</a></li>
              <li><a href="chitiet8.html">IPhone 11 Pro Max 512GB</a></li>
            </ul>
          </li>
        </ul>
      </div>
      
    </div> -->
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

    <div class="container backgroudnencontainer">
  <div class="row paddingqc mt-5">
  <!-- silde qc -->
    <div class="col-md-9">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
          <div class="carousel-item active" data-interval="10000">
            <a href="chitiet6.html"><img src="asset/img/quangcao/quangcao_2.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item" data-interval="2000">
            <a href="chitiet5.html"><img src="asset/img/quangcao/quangcao_1.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="chitiet9.html"><img src="asset/img/quangcao/quangcao_8.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item">
            <img src="asset/img/quangcao/quangcao_9.jpg" class="d-block w-100 imgqc" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/img/quangcao/quangcao_7.jpg" class="d-block w-100 imgqc" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/img/quangcao/quangcao_3.jpg" class="d-block w-100 imgqc" alt="...">
          </div>
          </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
      <!-- qc right -->
    <div class="col-md-3">
      <div class="row">
        <div class="col-md-12"><img src="asset/img/quangcao/quangcao_4.jpg" alt=""></div>
      </div>
      <div class="row">
        <div class="col-md-12"><img src="asset/img/quangcao/quangcao_5.jpg" alt="" class="imgkqc"></div>
      </div>
    </div>
  </div>
  
  <div class="row mt-4">
    <!-- điện thoai samsung-->
    <div class="col-md-10">
    <b style="color: red; font-size: 20px;"><i class="fa fa-star-o" aria-hidden="true"></i> IPhone <i class="fa fa-star-o" aria-hidden="true"></i></b>
    <?php
        $conn = mysqli_connect("localhost", "root", "","qlbanhang");
        $sql ="select * from dienthoai where MNDT='IP'";
        $result = mysqli_query($conn,$sql);
        $i =1;
        while($row = mysqli_fetch_array($result)){
          if($i>4) break;
          echo "<div class='col mt-3'>";
            echo"<div class='card float-left' style='width: 13.90rem; height: 25rem;'>";
             echo"<img src='".$row["HinhAnh"]."' class='img-fluid'>";
            
            echo"<form method = 'get' action = 'mua.php'>";
            echo"<input type='text' name='muadt' class='MSDT' value='".$row['MSDT']."'>";
            echo"<input type='text' name='txtctdt' class='MSDT' value='".$row['MSCTDT']."'>";
            
            echo"<div class='card-body'>";
              echo"<h5 class='card-title' style='height: 3rem;'>".$row["TenDT"]."</h5>";
            echo"<p class='card-text'>";
              echo"<b>".number_format($row["GiaDT"])." VNĐ</b>";
            echo"</p>";
            echo"<input type='submit' name='submua' class='btn btn-outline-primary' value='Mua ngay' />";
            echo"</form>";
            echo"</div>";
          echo"</div>";
        echo"</div>";
        }
      ?>
    </div>
    <div class="col-md-2  banchay1" style="height: 220px;">
      <h6 style="padding:5px 0;margin-bottom: 0px;"><img src="asset/img/logo/iconbanchay.gif" class="img-fluit" width="50px" height="50px" alt=""><b style="color: yellow;text-shadow:2px 2px 3px black;font-size: 20px;">Bán chạy</b></h6>
      <?php
      $conn = mysqli_connect("localhost", "root", "","qlbanhang");
      $sql ="select * from dienthoai where MSDT='IP1'";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($result)){
      echo"<table>";
      echo"<tr>";
          echo"<td>";
          echo"<div class='card' style='width: 6rem; height: 5rem;'>";
          echo"<img src='".$row['HinhAnh']."' height='80rem' class='img-fluit' alt='...'>";
          echo"</div>";
          echo"</td>";
          echo"<td>";
          echo"<form method = 'get' action = 'mua.php'>";
          echo"<input type='text' name='muadt' class='MSDT' value='".$row['MSDT']."'>";
          echo"<input type='text' name='txtctdt' class='MSDT' value='".$row['MSCTDT']."'>";
          echo"<button type='submit' class='btn btn-link' name='submua'><i style='font-size: 13px;'>".$row['TenDT']." <br> ".$row['GiaDT']."</i></button>";
          echo"</form>";
          echo"</td>";
        echo"</tr>";
        echo"</table>";
        }
      ?>
    </div>
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

<div id="icon">
  <a href="tel:0377056951"><img src="asset/img/logo/icontel.gif" width="70px" height="70px" alt="Điện Thoại"></a>
</div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/popperjs/popper.min.js"></script>
    <script src="asset/js/app.js"></script>
</body>
</html>