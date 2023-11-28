
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
</head>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/cs.css">
    <link rel="shortcut icon" href="asset/img/logo/logo3.PNG">
<body>
  
<nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href=""><img src="asset/img/logo/logo3.PNG" alt="T A M Shop" width="160px" height="50px"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="maunen collapse navbar-collapse navbar-dark bg-primary" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Lienhe.php">Liên Hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="giohang.html">Giỏ Hàng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Sanpham.html">Sản Phẩm</a>
            </li>
            
        </ul>
          <form class="form-inline my-2 my-lg-0 paddingSearch" action="search.php" method="GET">
            <input class="form-control mr-sm-2 ml-sm-5" type="search" placeholder="Search" aria-label="Search" name="search">
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
<div class="container backgroudnencontainer">
  <div class="row paddingqc mt-5">
  <!-- silde qc -->
    <div class="col-md-9">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" >
          <div class="carousel-item active" data-interval="10000">
            <a href="samsung.php"><img src="asset/img/quangcao/quangcao_2.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item" data-interval="2000">
            <a href="oppo.php"><img src="asset/img/quangcao/quangcao_1.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="samsung.php"><img src="asset/img/quangcao/quangcao_8.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="samsung.php"><img src="asset/img/quangcao/quangcao_9.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="samsung.php"><img src="asset/img/quangcao/quangcao_7.jpg" class="d-block w-100 imgqc" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="samsung.php"><img src="asset/img/quangcao/quangcao_3.jpg" class="d-block w-100 imgqc" alt="..."></a>
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
    <div class="col-md-12">

<?php
  if(isset($_GET['subthanhcong'])){
    $ten = $_GET['search'];
    $conn = new mysqli("localhost","root","","qlbanhang");
    $sql = "select *from dienthoai where TenDT like '%".$ten."%'";
    $result = mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($result)){
      echo "<div class='col mt-3'>";
      echo"<div class='card float-left' style='width: 13.50rem; height: 25rem;'>";
       echo"<img src='".$row["HinhAnh"]."' class='img-fluid'>";
      
      echo"<form method = 'get' action = 'mua.php'>";
      echo"<input type='text' name='muadt' class='MSDT' value='".$row['MSDT']."'>";
      echo"<input type='text' name='txtctdt' class='MSDT' value='".$row['MSCTDT']."'>";
      
      echo"<div class='card-body'>";
        echo"<h5 class='card-title' style='height: 3rem;'>".$row["TenDT"]."</h5>";
      echo"<p class='card-text'>";
        echo"<b>".$row["GiaDT"]."</b>";
      echo"</p>";
      echo"<input type='submit' name='submua' class='btn btn-outline-primary' value='Mua ngay' />";
      echo"</form>";
      echo"</div>";
      echo"</div>";
      echo"</div>";
    }
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