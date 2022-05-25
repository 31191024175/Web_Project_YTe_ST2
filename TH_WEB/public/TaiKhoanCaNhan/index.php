<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- bootstrap cdn link  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    

    <link rel="stylesheet" href="./Font-Awesomecss/css/font-awesome.min.css">

<!-- Phần nội dung trang  -->

    <title> Khai báo y tế!</title>
  </head>
  <body>


<!-- header section starts -->
<section class="header" id="fullhder">
<header class="fixed-top py-3 hder1">

    <div class="container d-flex align-items-center justify-content-between der2">

        <a href="#" class="logo">c<span class="fas fa-virus"></span>vid-19</a>

        <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>

        <nav class="nav">
            <a href="/TH_WEB/public/TrangChu/index.php" >Trang chủ</a>
            <a href="/TH_WEB/public/KhaiBao/index.php">Khai báo y tế</a>
            <a href="/TH_WEB/public/DangKyTiemChung/index.php">Đăng ký Tiêm Chủng</a>
            <a href="/TH_WEB/public/TaiKhoanCaNhan/index.php" class="active">Tài khoản Cá Nhân</a>
        </nav>

    </div>

</header>
</section>
<!--      -->
<?php
require_once 'C:/xampp/htdocs/TH_WEB/module_taikhoan.php';
HienThiThongTin($_SESSION['sdt'],$_SESSION['matkhau']);
?> 




<!-- footer section starts  -->

<section class="footer" style="background-color: #143F6B;">

    <div class="container">

        <div class="d-flex flex-wrap justify-content-center text-center text-sm-start" id = "footer1">

            <div class="box p-3 m-2" id = "box-footer-1">
                <h3>Địa điểm</h3>
                <a href="#">Việt Nam</a>
                <a href="#">USA</a>
                <a href="#">Japan</a>
                <a href="#">France</a>
                
            </div>

            

            <div class="box p-3 m-2" id = "box-footer-2">
                <h3>follow us</h3>
                <a href="#"><span class="fab fa-facebook-f"></span>&ensp;facebook </span></a>
                <a href="#"><span class="fab fa-instagram"></span>&ensp;instagram</a>
                <a href="#"><span class="fab fa-linkedin"></span>&ensp;linkedin</a>
                <a href="#"><span class="fab fa-twitter"></span>&ensp;twitter</a>
            </div>

            <div class="box p-3 m-2" id = "box-footer-3">
                <h3>Thông tin liên lạc</h3>
                <a href="#"><span class="bi bi-telephone"></span>&ensp;0933115489</a>
                <a href="#"><span class="bi bi-telephone"></span>&ensp;0111587987</a>
                <a href="#"><span  class="bi bi-envelope"></span>&ensp;covid19-VietNam@gmail.com</a>
                <a href="#"><span class="bi bi-geo-alt"></span> Việt Nam, Hà Nội</a>
            </div>

        </div>

        

    </div>

</section>

<!-- footer section ends -->

<script src="java.js"></script>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>

</html>