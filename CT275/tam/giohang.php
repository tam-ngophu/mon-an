<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="asset/css/cs.css">
    <link rel="shortcut icon" href="asset/img/logo/logo3.PNG">
<body>
<!-- nav -->
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Giỏ Hàng<span class="sr-only">(current)</span></a>
            </li>
            
        </ul>
          <form class="form-inline my-2 my-lg-0 paddingSearch" action="search.php" method="GET">
            <input style="margin-left: 143px;" class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success mr-sm-2 my-2 my-sm-0 bgroudsearch" name="subthanhcong" type="submit">Search</button>
          </form>
          
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item dropdown">
            
              <?php
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


<!-- xu ly gio hang -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                
                if(isset($_SESSION['HotenKH'])){

                }else{
                    header("location: dangnhap.html");
                }
                ?>
                
                
                <div class="table-responsive">
                    <table class="table table-bordered text-center table table-striped ">
                         <thead>
                            <tr class="bg-info">
                                <th>Ảnh đại diện</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                                <th>Mua/Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                                $tongtien = 0;
                                if(isset($_SESSION['gioHang'])){
                                foreach($_SESSION['gioHang'] as $cart){
                                $thanhTien = $cart['GiaDT'] * $cart['soluong'];
                                $tongtien += $thanhTien;
                            ?>
                                                
                            <tr>
                                <td><?php echo'<img src="'.$cart['HinhAnh'].'" class="img-fluid img-giohang" width="100rem" height="100rem">';?></td>
                                <td><?php echo''.$cart['TenDT'].'';?></td>
                                <td><?php echo''.$cart['soluong'].'';?></td>
                                <td><?php echo''.number_format($cart['GiaDT']).' VNĐ';?></td>
                                <td><?php echo''.number_format($thanhTien).' VNĐ';?></td>
                                <td>
                                    <?php echo "<a href='muasanpham.php?muadt=".$cart['muadt']."' class='btn btn-primary'>Mua hàng</a>";?>
                                    <?php echo "<a href='xoagiohang.php?muadt=".$cart['muadt']."' class='btn btn-danger'>Xóa</a>";?>
                                </td>
                            </tr>
                                <?php
                                }
                                ?>

                            <tr class="bg-info">
                                <td colspan="6"><?php echo'Tổng tiền: '.number_format($tongtien).' VND';?></td>
                            </tr>   
                        </tbody>
                            <?php    
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/popperjs/popper.min.js"></script>
    <script src="vendor/vuejs/vue.js"></script>
    <script src="asset/js/app.js"></script>
</body>
</html>