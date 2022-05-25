<?php


// require_once 'C:\xampp\htdocs\TH_WEB\module.php';
// $link=null;
// taoKetNoi($link);
// // if (isset($_POST['submit'])) {
// //     $full_name = $_POST['fullname'];
// //     $sql = "INSERT INTO test(hoten) VALUES('$full_name')";
// //     taoKetNoi($link);
// // }

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- bootstrap cdn link  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">



    <title> Khai báo Y Tế!</title>
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
                    <a href="/TH_WEB/public/KhaiBao/index.php" class="active">Khai báo y tế</a>
                    <a href="/TH_WEB/public/DangKyTiemChung/index.php">Đăng ký Tiêm Chủng</a>
                    <a href="/TH_WEB/public/DangNhap/index.php" >Tài khoản Cá Nhân</a>
                </nav>

            </div>

        </header>
    </section>

    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center pt-5">

                <div class="col-md-6">
                    <img src="https://img.freepik.com/free-vector/family-protected-from-virus_23-2148575207.jpg?w=996.png"
                        class="w-100" alt="">
                </div>

                <div class="col-md-6 content text-center text-md-start pl-md-4">
                    <span>BẢO VỆ BẢN THÂN VÀ NHỮNG NGƯỜI XUNG QUANH KHỎI COVID-19</span>
                    <b>
                        <h3>HÃY KHAI BÁO Y TẾ !</h3>
                    </b> <br />
                    <button href="#" class="link-btn">Khai báo y tế ngay</button>
                </div>

            </div>

        </div>

    </section>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <section class="bodyweb" id="bodyweb">
        <div class="row"><br />
        </div>
        <div class="container big" id="container-big">
            <center>
                <div class="national-brand text-center mb-15">
                    <div class="text-uppercase" style="font-size: 25px;"> <br /> <b>Thông tin khai báo y tế</b></div>
                    <div class="slogan"></div>
                </div>
                <div class="text-center text-uppercase">
                    <div class="">( Phòng chống dịch COVID-19 )</div>
                    <div class="" style="color: rgb(191, 3, 25);font-size: 13px ;"><br /><b>Khuyến cáo: Khai báo thông
                            tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</b></div> <br />
                </div>
            </center>
            <form action="" method="post">
                <?php 
    

    require_once 'C:\xampp\htdocs\TH_WEB\module_kbyt.php';
    ?>

                <div class="container includes">
                    <div class="row mb-10">
                        <div class="col-md-12   col-12 khaiho ">
                            <label class="number-checkbox" style="font-weight: 600; font-size: 16px"><span
                                    class="mr-10">Khai hộ </span><input id="input73649" type="hidden" value="0"
                                    name="fields[otherUser]" class="style-checkbox" readonly="readonly"><input
                                    id="checkbox73649" type="checkbox" value="1" class="input73649 style-checkbox"
                                    onclick="$('#input73649').val(this.checked?1:0).change()">
                            </label>
                        </div>
                    </div>
                    <b>
                        <h4>Thông tin cá nhân </h4>
                    </b>
                    <!--hộp tên và cmnd sdt-->
                    <div class="row info-namPas-box">
                        <div class="col-md-4 col-12 ten ">
                            <div class="form-group label-240 ">
                                <label>Họ tên (ghi chữ IN HOA) <span class="text-danger"> (*)</span>:
                                </label>
                                <input class="form-control" name="fullname_kbyt" type="text"
                                    style="text-transform: uppercase;" data-msg-required="Bạn chưa nhập họ tên">
                            </div>
                        </div>
                        <div class="col-md-4 col-12 cmnd ">
                            <div class="form-group  ">
                                <label>Số hộ chiếu / CMND / CCCD</label>:
                                <input class="form-control" name="passport_kbyt" type="text" value=""
                                    data-msg-required="Bạn chưa nhập CMT, hộ chiếu">
                            </div>
                        </div>
                        <div class="col-md-4 col-12 sdt ">
                            <div class="form-group label sdt ">
                                <label>Số điện thoại <span class="text-danger"> (*)</span>:
                                </label>
                                <input class="form-control" name="sdt_kbyt" type="text" value=""
                                    data-msg-required="Bạn chưa nhập Số điện thoại">
                            </div>
                        </div>
                    </div>
                    <!-- hàng ngày sinh giới tính quốc tịch -->
                    <div class="row info-BD/QT-box">
                        <div class="col-md-4 col-12 ngay_sinh">
                            <div class="form-group">
                                <span class="text_birthday" translate="ngay_sinh">Ngày sinh</span> <span
                                    class="text-danger">(*)</span>:
                                <input class="datetimepicker-input input_birthday form-control" name="birthday_kbyt"
                                    type="DD/MM/YYYY" placeholder="DD/MM/YYYY"><input type="text"
                                    class="input_birthday form-control" id="combodate" placeholder="DD/MM/YYYY"
                                    style="display: none;">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <span class="text_gender" translate="gioi_tinh">Giới tính</span>
                                <span class="text-danger"> (*)</span>:
                                <div class="combobox-group">
                                    <div class=" input-group combobox-control">

                                        <select name="gender_kbyt">
                                            <option disabled selected>Chọn giới tính</option>
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Giới tính khác">Giới tính khác</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <span class="text_quoctich" translate="quoc_tich">Quốc tịch</span>
                                <span class="text-danger"> (*)</span>:
                                <div class="combobox-group">
                                    <div class="input-group combobox-control qt ">

                                        <select name="quoctich_kbyt">
                                            <option disabled selected>Chọn quốc tịch</option>
                                            <option value="MC-TQ">Macao(Trung Quốc)</option>
                                            <option value="Hồng Kông">Hồng Kông(Trung Quốc)</option>
                                            <option value="ARXU">Ả Rập Xê Út</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Ai Cập">Ai Cập</option>
                                            <option value="Ấn Độ">Ấn Độ</option>
                                            <option value="Anh">Anh</option>
                                            <option value="Áo">Áo</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Ba Lan">Ba Lan</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Bỉ">Bỉ</option>
                                            <option value="Bồ Đào Nha">Bồ Đào Nha</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cộng hoà Séc">Cộng hoà Séc</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Đan Mạch">Đan Mạch</option>
                                            <option value="Đức">Đức</option>
                                            <option value="Hoa Kỳ">Hoa Kỳ</option>
                                            <option value="Hàn Quốc">Hàn Quốc</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Nam Phi">Nam Phi</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nga">Nga</option>
                                            <option value="Nhật Bản">Nhật Bản</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Phần Lan">Phần Lan</option>
                                            <option value="Pháp">Pháp</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Tây Ban Nha">Tây Ban Nha</option>
                                            <option value="Thái Lan">Thái Lan</option>
                                            <option value="Thổ Nhĩ Kỳ">Thổ Nhĩ Kỳ</option>
                                            <option value="Thuỵ Điển">Thuỵ Điển</option>
                                            <option value="Thuỵ Sĩ">Thuỵ Sĩ</option>
                                            <option value="Triều Tiên">Triều Tiên</option>
                                            <option value="Úc">Úc</option>
                                            <option value="Ý">Ý</option>
                                            <option value="Campuchia">Campuchia</option>
                                            <option value="Việt Nam">Việt Nam</option>
                                            <option value="Trung Quốc">Trung Quốc</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>

                    </div>

                    <!-- dia chi nha -->
                    <b>
                        <h4>Địa chỉ liên lạc </h4>
                    </b>
                    <div class="row info-diachinha1-box">
                        <div class="col-md-6 col-12 dc1 ">
                            <div class="form-group ">
                                <label>Địa chỉ hiện tại<span class="text-danger"> (*)</span>:
                                </label>
                                <input class="form-control" name="sonha_kbyt" type="text" value=""
                                    data-msg-required="Bạn chưa nhập số nhà/ tên đường">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 xaphuong ">
                            <div class="form-group ">
                                <label>Xã Phường <span class="text-danger"> (*)</span>: </label>
                                <input class="form-control" name="xaphuong_kbyt" type="text" value=""
                                    data-msg-required="Bạn chưa nhập xã/phường">
                            </div>
                        </div>
                    </div>
                    <div class="row info-diachinha1-box">
                        <div class="col-md-6 col-12 quanhuyen ">
                            <div class="form-group ">
                                <label>Quận Huyện <span class="text-danger"> (*)</span>:
                                </label>
                                <input class="form-control" name="quanhuyen_kbyt" type="text" value=""
                                    data-msg-required="Bạn chưa nhập Quận/Huyện">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 tinh ">
                            <div class="form-group ">
                                <label>Tỉnh <span class="text-danger"> (*)</span>:
                                </label>
                                <input class="form-control" name="tinh_kbyt" type="text" value=""
                                    data-msg-required="Bạn chưa nhập Tỉnh">
                            </div>
                        </div>
                    </div>
                    <div class="row info-diachinha1-box">
                        <div class="col-md-12 col-12 email ">
                            <div class="form-group ">
                                <label>Email:</label>
                                <input class="form-control" name="email_kbyt" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-lenght ">
                        <h6>
                            <div class="" style="color:blue; font-size: 16px;" <label><b> Trong vòng 14 ngày qua,
                                    Anh/Chị có đến tỉnh/thành phố, quốc gia/vùng lãnh thổ nào (Có thể đi qua nhiều nơi)
                                </b> </label>
                        </h6>
                        <div class="mt-10 inline-block pl-10"> <input type="radio" name="showCountrypassing_kbyt"
                                value="0" class="style-radio" checked=""> Không
                            <input type="radio" name="fields[showCountryPassing]" value="1" data-x-group="2"
                                class="style-radio"> Có
                        </div>
                    </div>
                    <!-- form khai bao tick chọn -->
                    <div class="col-12 wrap_trieuchung">
                        <div class="form-group">
                            <span class="text_note_1 text-primary font-weight-bold"
                                translate="ban_co_thay_nhung_trieu_chung_nao">Anh/Chị hiện có những triệu chứng hay biểu
                                hiện nào sau đây không?</span><span class="text-danger"> (*)</span>:
                            <div class="table-responsive mt-1">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text_symptoms" translate="dau_hieu">Dấu hiệu</th>
                                            <th width="15%" class="text-center text_yes" translate="co">Có</th>
                                            <th width="15%" class="text-center text_no" translate="khong">Không</th>
                                        </tr>
                                    </thead>
                                    <tbody id="list-trieuchung">
                                        <tr>
                                            <td>Sốt <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="sot1"
                                                        name="trieuchung_sot_kbyt" class="radio-trieuchung"
                                                        value="1"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="sot1"
                                                        name="trieuchung_sot_kbyt" class="radio-trieuchung" value="0"
                                                        checked=""></label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Ho <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="ho1"
                                                        name="trieuchung_ho_kbyt" class="radio-trieuchung"
                                                        value="1"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="ho1"
                                                        name="trieuchung_ho_kbyt" class="radio-trieuchung" value="0"
                                                        checked=""></label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Đau họng <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="dauhong1"
                                                        name="trieuchung_dauhong_kbyt" class="radio-trieuchung"
                                                        value="1"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="dauhong1"
                                                        name="trieuchung_dauhong_kbyt" class="radio-trieuchung"
                                                        value="0" checked=""></label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Mất vị/Mất mùi <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="matmui1"
                                                        name="trieuchung_matmui_kbyt" class="radio-trieuchung"
                                                        value="1"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="matmui1"
                                                        name="trieuchung_matmui_kbyt" class="radio-trieuchung" value="0"
                                                        checked=""></label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Cảm giác mệt <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="met1"
                                                        name="trieuchung_met_kbyt" class="radio-trieuchung"
                                                        value="1"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="met1"
                                                        name="trieuchung_met_kbyt" class="radio-trieuchung" value="0"
                                                        checked=""></label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Khó thở <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="khotho1"
                                                        name="trieuchung_khotho_kbyt" class="radio-trieuchung"
                                                        value="1"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="khotho1"
                                                        name="trieuchung_khotho_kbyt" class="radio-trieuchung" value="0"
                                                        checked=""></label>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form-group xacnhan_dichte">
                            <span class="text_note_2 text-primary font-weight-bold"
                                translate="trong_thoi_gian_vua_qua">Trong thời gian vừa qua</span><span
                                class="text-danger">
                                (*)</span>:
                            <div class="table-responsive mt-1">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th><span class="text_epidemiological_factors"
                                                    translate="yeu_to_dich_te">Yếu tố dịch tễ</span> <span
                                                    class="text-danger">(*)</span></th>
                                            <th width="15%" class="text-center text_yes" translate="co">Có</th>
                                            <th width="15%" class="text-center text_no" translate="khong">Không</th>
                                        </tr>
                                    </thead>
                                    <tbody id="list-dichte">
                                        <tr>
                                            <td>1. Bạn có đang mắc COVID-19 không? <span class="text-danger">(*)</span>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="maccovid"
                                                        name="dichte_benh_kbyt" class="radio-dichte" value="1"
                                                        data-mucdo="2"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="maccovid"
                                                        name="dichte_benh_kbyt" class="radio-dichte" value="0"
                                                        data-mucdo="2" checked=""></label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2. Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày qua
                                                <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="tiepxuccovid"
                                                        name="dichte_tiepxuc_kbyt" class="radio-dichte" value="1"
                                                        data-mucdo="2"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="tiepxuccovid"
                                                        name="dichte_tiepxuc_kbyt" class="radio-dichte" value="0"
                                                        data-mucdo="2" checked=""></label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3. Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua <span
                                                    class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="dituvungkhac"
                                                        name="dichte_quocgiapassing_kbyt" class="radio-dichte" value="1"
                                                        data-mucdo="2"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="dituvungkhac"
                                                        name="dichte_quocgiapassing_kbyt" class="radio-dichte" value="0"
                                                        data-mucdo="2" checked=""></label>
                                            </td>
                                        </tr>



                                        <tr>
                                            <td>4. Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua không?
                                                <span class="text-danger">(*)</span></td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="xuatviencovid"
                                                        name="dichte_dieutri_kbyt" class="radio-dichte" value="1"
                                                        data-mucdo="0"></label>
                                            </td>
                                            <td class="text-center td-center">
                                                <label class="lb-radio"><input type="radio" id="xuatviencovid"
                                                        name="dichte_dieutri_kbyt" class="radio-dichte" value="0"
                                                        data-mucdo="0" checked=""></label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <span class="text_captcha text-primary font-weight-bold" translate="Trieu_chung_khac">Triệu
                                chứng khác: </span>
                        </div>
                        <textarea name="textarea_kbyt" rows="2" class="form-control input_note"
                            placeholder="Vui lòng cung cấp thêm thông tin về triệu chứng hay dấu hiệu khác nếu có"
                            data-bind="value:ghi_chu">
                    </textarea>
                        <br />
                    </div>
                    <!-- <div class="col-12">
                <div class="form-group">
                    <span class="text_captcha text-primary font-weight-bold" translate="vui_long_nhap_ma_xac_thuc">Vui lòng nhập mã xác thực gửi về Số điện thoại của bạn</span><span class="text-danger"> (*)</span>:
                </div>
                <input class="form-control code" type="text">
            </div>
            <div class="agreeWrapper 456">  
                <div class="label-agree"> <br/> Dữ liệu bạn cung cấp hoàn toàn bảo mật và chỉ phục vụ cho việc phòng chống dịch, thuộc quản lý của Ban Phòng chống dịch Covid-19. Khi bạn nhấn nút "Gửi" là bạn đã hiểu và đồng ý.</div> 
            </div>
            <div class="btn-submit-box text-center"  value="submit"> 
                <button type="submit" class="btn btn-success" name="submit">Gửi tờ khai</button> 
            </div>   -->

                    <div class="row maxacthuc">
                        <div class="col-md-8  nhapma ">
                            <div class="form-group label-240 ">
                                <label>Vui lòng nhập mã xác thực gửi về Số điện thoại của bạn <span class="text-danger">
                                        (*)</span>:
                                </label>
                                <input class="form-control" name="maxacthuc" type="text" value=""
                                    style="text-transform: uppercase;" data-msg-required="Bạn chưa nhập mã xác thực">

                            </div>

                        </div>
                        <div class="col-md-4 guima"> <br />
                            <div class="btn-submit-box text-center">
                                <button type="submit" class="btn btn-success-maxacthuc">Gửi mã</button>
                            </div>
                        </div>
                    </div>
                    <div class="agreeWrapper 456">
                        <div class="label-agree"> <br /> Dữ liệu bạn cung cấp hoàn toàn bảo mật và chỉ phục vụ cho việc
                            phòng chống dịch, thuộc quản lý của Ban Phòng chống dịch Covid-19. Khi bạn nhấn nút "Gửi" là
                            bạn đã hiểu và đồng ý.</div>
                    </div>
                    <div class="btn-submit-box text-center" value="submit">
                        <button type="submit" class="btn btn-success" name="submit" onchange="KhaiBaoYTe()">Gửi tờ khai</button>
                    </div>



                </div>
            </form>
        </div>

        </div>
    </section>
    <br />
    <!-- <form action="" method="">
    <input type="text" name="name-t" value="name"><br>
    <input type="text" name="password-t" value="password">
    <input type="submit" name="submit" value="submit">
</form> -->

    <b><button onclick="topFunction()" id="myBtn" title="Go to top">Top</button></b>

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

    <script src="java.js"></script>
</body>

</html>