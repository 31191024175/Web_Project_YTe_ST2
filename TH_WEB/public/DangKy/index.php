<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Ký</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <div class="container">
    <!-- ảnh bìa -->
    <div class="imgcover">
      <img
        src="https://img.freepik.com/free-vector/doctor-online-service-platform-healthcare-modern-medicine-treatment-analysis-diagnosis-website-isolated-vector-illustration_613284-1835.jpg?t=st=1653067510~exp=1653068110~hmac=e9690f1a144046f42c3c97dc9d05567f219457f4d0ca53ad8566b397417d496f&w=826"
        class="w-20" alt="">
    </div>
    <!-- Form đăng nhập -->
    <!-- <div id="Login" class="wrapper">
      <div class="in4">
        <div class="">
        <header>Cổng thông tin y tế điện tử </header>
      </div>     
    </div>
    <div class=" data">
          <div class="">
            <form action="#">
              <div class="field tel">
                <div class="input-area">
                  <input type="text" placeholder="Số điện thoại">
                  <i class="icon fas fa-phone"></i>
                  <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>

                <div class="error error-txt">Số điện thoại không được để trống </div>
              </div>

              <div class="field password">
                <div class="input-area">
                  <input type="password" placeholder="Mật khẩu">
                  <i class="icon fas fa-lock"></i>
                  <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>

                <div class="error error-txt">Mật khẩu không được để trống</div>
              </div>
              <br />
              <!-- <div class="pass-txt"><a href="#">Quên mật khẩu?</a></div> <br/> -->

              <!-- <input type="submit" value="Login"> -->
              <!-- <button href="#" class="link-btn">Đăng nhập</button>
            </form>
          </div>
        </div>

        <div class="forger">
          <div class="">
            <div class="sign-txt">Bạn chưa đã có tài khoản? <a href="#">Đăng ký ngay</a></div> </br>
          </div>
        </div>
      </div> -->
      <!-- form đăng ký -->
      <div id="register" class="wrapper">
        <div class="in4">
          <div class="">
            <header>Cổng thông tin y tế điện tử </header>
          </div>
        </div>

        <div class="data">
          <div class="input">
            <form action="#" method="post">
              <div class="field tel">
                <div class="input-area">
                  <input type="text" placeholder="Số điện thoại" name="sdt_dangky">
                  <i class="icon fas fa-phone"></i>
                  <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>

                <div class="error error-txt">Số điện thoại không được để trống </div>
              </div>

              <div class="field password">
                <div class="input-area">
                  <input type="password" placeholder="Mật khẩu" name="matkhau_dangky">
                  <i class="icon fas fa-lock"></i>
                  <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>

                <div class="error error-txt">Mật khẩu không được để trống</div>
              </div>
              <br />
              

              <!-- <input type="submit" value="Login">-->
              <button type="submit" name="submit_dangky" href="#"class="link-btn" onchange="DangKy()">Đăng ký</button>
            </form>
          </div>
        </div>
        <?php
        require_once 'C:\xampp\htdocs\TH_WEB\module_taikhoan.php';
        ?>
        <div class="forger">
          <div class="">
            <div class="sign-txt">Bạn đã có tài khoản? <a href="/TH_WEB/public/DangNhap/index.php">Đăng nhập ngay</a></div> </br>
          </div>
        </div>
      </div>
    </div>

    
    <script> src = "java.js"</script>
  </div>
</body>

</html>