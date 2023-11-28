<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">DANH MỤC</a>

  <!-- Links -->
  <ul class="navbar-nav ">
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Thống kê đơn hàng
      </a>
      <div class="dropdown-menu bg">
          <a class="dropdown-item" href="admin.php">Duyệt đơn hàng</a>
        <a class="dropdown-item" href="thongke.php">Danh sách đơn hàng</a>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="phanhoi.php">Phản hồi</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Nhân viên
      </a>
      <div class="dropdown-menu bg">
        <a class="dropdown-item" href="nhanvien.php">Danh sách nhân viên</a>
        <a class="dropdown-item" href="dangkynv.php">Thêm nhân viên mới</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Điện thoại
      </a>
      <div class="dropdown-menu bg">
        <a class="dropdown-item" href="dienthoai.php">Danh sách điện thoại</a>
        <a class="dropdown-item" href="themdienthoai.php">Thêm điện thoại mới</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Chi tiết điện thoại
      </a>
      <div class="dropdown-menu bg">
        <a class="dropdown-item" href="CTdienthoai.php">Danh sách chi tiết điện thoại</a>
        <a class="dropdown-item" href="CTthemdienthoai.php">Thêm chi tiết điện thoại mới</a>
      </div>
    </li>

    <!-- Dropdown -->

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Nhóm điện thoại
      </a>
      <div class="dropdown-menu bg">
        <a class="dropdown-item" href="nhomdienthoai.php">Danh sách nhóm điện thoại</a>
        <a class="dropdown-item" href="themnhomdienthoai.php">Thêm nhóm điện thoại</a>
      </div>
    </li>
  </ul>
  <ul class="navbar-nav canphai">
            <li class="nav-item dropdown">
            
              <?php
              if(isset($_SESSION['sdtNV'])){
                $conn = mysqli_connect("localhost","root","","qlbanhang");
                $conn -> set_charset("utf-8");
                $sql = "select * from nhanvienshop where sdtNV= '".$_SESSION['sdtNV']."'";
                
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                echo'
                <div class="dropdown">
                  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$row['TenNV'].'
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="logout.php" name="logout">Đăng Xuất</a>
                  </div>
                </div>
                ';
              }else{
                echo'
                <div class="dropdown">
                  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tài khoản
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="loginadmin.php">Đăng nhập</a>
                    <a class="dropdown-item" href="dangkynv.php">Đăng ký</a>
                  </div>
                </div>
                ';
              }
            ?>
            </li>
        </ul>
</nav>