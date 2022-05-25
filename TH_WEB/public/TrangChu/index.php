<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <header class="fixed-top py-3">

        <div class="container d-flex align-items-center justify-content-between">

            <a href="#" class="logo">c<span class="fas fa-virus"></span>vid-19</a>

            <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>

            <nav class="nav">
                <a href="/TH_WEB/public/TrangChu/index.php" class="active">Trang chủ</a>
                <a href="/TH_WEB/public/KhaiBao/index.php">Khai báo y tế</a>
                <a href="/TH_WEB/public/DangKyTiemChung/index.php">Đăng ký Tiêm Chủng</a>
                <a href="/TH_WEB/public/DangNhap/index.php">Tài khoản cá nhân</a>
            </nav>

        </div>

    </header>

    <!-- header section end-->

    <!-- home section starts  -->


    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center pt-5">

                <div class="col-md-6">
                    <img src="images/slide.png" class="w-100" alt="">
                </div>

                <div class="col-md-6 content text-center text-md-start pl-md-5">
                    <span>AI Ở ĐÂU Ở YÊN ĐÓ</span>
                    <h3>BẢO VỆ BẢN THÂN KHỎI COVID-19</h3>
                    <a href="#" class="link-btn">Tìm hiểu</a>
                </div>

            </div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>



            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/3.png" class="d-block w-100" alt="..." style="width:200px">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/4.png" class="d-block w-100" alt="..." style="width:200px">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <!-- about section ends -->
    <!-- static section starts  -->
    <section class="static">
        <div id="covidin4" class="container">
            <h2>Thông tin COVID -19 tại <span id="thanhpho"></span></h2>
            <!-- Chọn thanh pho -->
            <select class="form-select" aria-label="Default select example" id="form_selected" onchange="update()">
                <option value="0">Hà Nội</option>
                <option value="1">TP. Hồ Chí Minh</option>
                <option value="2">Nghệ An</option>
                <option value="3">Bắc Giang</option>
                <option value="4">Vĩnh Phúc</option>
                <option value="5">Hải Dương</option>
                <option value="6">Quảng Ninh</option>
                <option value="7">Bắc Ninh</option>
                <option value="8">Bình Dương</option>
                <option value="9">Phú Thọ</option>
                <option value="10">Nam Định</option>
            </select>
            <div class="board">
                <div class="card a">
                    <ion-icon name="speedometer-outline"></ion-icon>
                    <h4>Dương tính</h4><span id="duongtinh"></span>
                </div>
                <div class="card ca">
                    <ion-icon name="menu-outline"></ion-icon>
                    <h4>Tổng số ca </h4><span id="camac"></span>
                </div>
                <div class="card d">
                    <ion-icon name="heart-dislike-circle-outline"></ion-icon>
                    <h4>Tử vong</h4><span id="tuvong"></span>
                </div>
                <div class="card r">
                    <ion-icon name="medkit-outline"></ion-icon>
                    <h4>Chữa khỏi</h4><span id="chuakhoi"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- static section ends -->

    <!-- prevent section starts  -->

    <section class="prevent" id="prevent">

        <h1 class="heading"> Làm thế nào để <span>Phòng Bệnh</span>? </h1>

        <div class="container">

            <div class="d-flex flex-wrap justify-content-center">

                <div class="box p-4 m-2">
                    <img src="images/01.png" alt="">
                    <h3>Đeo khẩu trang</h3>
                    <p>Đeo khẩu trang để tránh các tia giọt bắn, cũng như là che chắn cho mũi</p>
                </div>

                <div class="box p-4 m-2">
                    <img src="images/02.png" alt="">
                    <h3>Rửa tay thường xuyên</h3>
                    <p>Rửa tay thường xuyên giúp tiêu diệt các vi khuẩn bám ở bàn tay</p>
                </div>

                <div class="box p-4 m-2">
                    <img src="images/03.png" alt="">
                    <h3>Tư vấn bác sĩ</h3>
                    <p>Tư vấn bác sĩ ngay khi có các triệu chứng bất thường</p>
                </div>

                <div class="box p-4 m-2">
                    <img src="images/04.png" alt="">
                    <h3>Tránh tiếp xúc</h3>
                    <p>Hạn chế tiếp xúc các nơi đông người, các tiệc tùng họp mặt</p>
                </div>

                <div class="box p-4 m-2">
                    <img src="images/05.png" alt="">
                    <h3>Tránh tụ tập</h3>
                    <p>Tránh tụ tập quá đông những nơi như khu giải trí</p>
                </div>

                <div class="box p-4 m-2">
                    <img src="images/06.png" alt="">
                    <h3>Vệ sinh hằng ngày</h3>
                    <p>Vệ sinh hằng ngày để bảo vệ cơ thể khỏi một ngày tiếp xúc</p>
                </div>

            </div>

        </div>


    </section>

    <!-- ----------------------------------------------------------------------- -->

    <!-- prevent section ends -->

    <!-- experts section starts  -->

    <section class="experts" id="experts">

        <h1 class="heading"> Gặp gỡ các <span>Chuyên gia</span> </h1>

        <div class="container">

            <div class="d-flex justify-content-center flex-wrap">
                <?php
                require 'C:\xampp\htdocs\TH_WEB\module_expert.php';
                Card();
                ?>
            </div>

        </div>

    </section>

    <!-- experts section ends -->

    <!-- contact section starts  -->

    <!-- <section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> for assistance </h1>

    <div class="container">

        <div class="row flex-wrap-reverse">

            <div class="col-md-7 p-2">
                <form action="">
                    <input type="text" placeholder="name" class="box">
                    <input type="email" placeholder="email" class="box">
                    <input type="number" placeholder="number" class="box">
                    <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
                    <input type="submit" class="link-btn" value="send message" name="" id="">
                </form>
            </div>

            <div class="col-md-5 p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.575447738759!2d106.63768671533444!3d10.843766160911038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752984c5aeadef%3A0xc11e089c651b63b7!2zNDkwIFBoYW4gSHV5IMONY2gsIFBoxrDhu51uZyAxMiwgR8OyIFbhuqVwLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1650423513536!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </div>

</section> -->

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <h1 class="heading"><span>Tin tức</span> </h1>

        <div class="container">

            <div class="d-flex justify-content-center flex-wrap">
                <?php
                TinTuc()
                ?>
            </div>

        </div>

    </section>


    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer" style="background-color: #143F6B;">

        <div class="container">

            <div class="d-flex flex-wrap justify-content-center text-center text-sm-start" id="footer1">

                <div class="box p-3 m-2" id="box-footer-1">
                    <h3>Địa điểm</h3>
                    <a href="#">Việt Nam</a>
                    <a href="#">USA</a>
                    <a href="#">Japan</a>
                    <a href="#">France</a>

                </div>



                <div class="box p-3 m-2" id="box-footer-2">
                    <h3>follow us</h3>
                    <a href="#"><span class="fab fa-facebook-f"></span>&ensp;facebook </span></a>
                    <a href="#"><span class="fab fa-instagram"></span>&ensp;instagram</a>
                    <a href="#"><span class="fab fa-linkedin"></span>&ensp;linkedin</a>
                    <a href="#"><span class="fab fa-twitter"></span>&ensp;twitter</a>
                </div>

                <div class="box p-3 m-2" id="box-footer-3">
                    <h3>Thông tin liên lạc</h3>
                    <a href="#"><span class="bi bi-telephone"></span>&ensp;0933115489</a>
                    <a href="#"><span class="bi bi-telephone"></span>&ensp;0111587987</a>
                    <a href="#"><span class="bi bi-envelope"></span>&ensp;covid19-VietNam@gmail.com</a>
                    <a href="#"><span class="bi bi-geo-alt"></span> Việt Nam, Hà Nội</a>
                </div>

            </div>



        </div>

    </section>

    <!-- footer section ends -->
















    <!-- js file link  -->
    <script src="script.js"></script>
    <script src="sass.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>