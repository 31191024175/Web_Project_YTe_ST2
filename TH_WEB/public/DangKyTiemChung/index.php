<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="STYLE.CSS" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Đăng ký tiêm chủng!</title>
</head>

<body>
    <!-- header section starts -->
    <section class="header" id="fullhder">
        <header class="fixed-top py-3 hder1">
            <div class="container d-flex align-items-center justify-content-between der2">
                <a href="#" class="logo">c<span class="fas fa-virus"></span>vid-19</a>
                <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>
                <nav class="nav">
                    <a href="/TH_WEB/public/TrangChu/index.php">Trang chủ</a>
                    <a href="/TH_WEB/public/KhaiBao/index.php">Khai báo y tế</a>
                    <a href="/TH_WEB/public/DangKyTiemChung/index.php" class="active">Đăng ký Tiêm Chủng</a>
                    <a href="/TH_WEB/public/DangNhap/index.php">Tài khoản Cá Nhân</a>
                </nav>
            </div>
        </header>
    </section>

    <!-- Phần giới thiệu -->
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center pt-5">
                <div class="col-md-6">
                    <img src="https://img.freepik.com/free-vector/cartoon-vaccination-campaign-illustration_52683-62384.jpg?t=st=1652419627~exp=1652420227~hmac=781c0ca83b0f7a92a7c853dec3416646f774a5ea49331b4ea5637380d294c3d0&w=826" class="w-100" alt="">
                </div>

                <div class="col-md-6 content text-center text-md-start pl-md-4">
                    <span>ĐĂNG KÝ</span>
                    <b>
                        <h3>TIÊM CHỦNG VẮC-XIN COVID-19</h3>
                    </b><br />
                    <button href="#" class="link1-btn">Đăng ký ngay</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Phần chính -->
    <section class="body" id="body">
        <div class="formchinh">
            <center>
                <div class="national-brand text-center mb-15">
                    <div class="text-uppercase" style="font-size: 25px;"> <br />
                        <b>Hướng dẫn đăng ký tiêm ngừa vắc-xin Covid-19 <br />cho cá nhân và người thân</b>
                    </div>
                    <div class="slogan"></div>
                </div>
                <div class="text-center text-uppercase">
                    <div class="">( Phòng chống dịch COVID-19 )</div>
                    <div class="" style="color: rgb(191, 3, 25);font-size: 15px ;"><br /><b>Khuyến cáo: Đăng ký thông
                            tin chính xác để việc tiến hành tiêm chủng diễn ra thuận lợi</b></div> <br />
                </div>
            </center>

            <div class="includes">

                <!-- CÁC NÚT RADIO VÀ PROGRESS -->
                <div class="step-row">
                    <div id="progress"></div>
                    <div class="step-col"><small>Thông tin</small></div>
                    <div class="step-col"><small>Hoàn thành</small></div>
                </div>

                <!-- Form1 từ đây -->
                <form action="" id="body0">
                    <form id="form1" action="" method="get">
                        <!-- PROGRESS -->
                        <div class="checkbox-row">
                            <div class="checkin4">
                                <input type="radio" name="in4" id="btn_dk_ban_than1" checked="checked" /> Đăng ký cho bản thân</input>
                                <input type="radio" name="in4" id="btn-dk_nguoi_than1" /> Đăng ký cho người thân</input>

                            </div>
                        </div>
                        <?php
                        require_once 'C:\xampp\htdocs\TH_WEB\module_dktc.php';
                        ?>
                        <div class="row dky">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>
                                        Đăng ký mũi tiêm thứ
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select class="form-control" name="muitiem_dktc">
                                        <option selected value="1">Mũi tiêm thứ nhất</option>
                                        <option value="2">Mũi tiêm thứ hai</option>
                                        <option value="3">Mũi tiêm thứ ba</option>
                                        <option value="4">Mũi tiêm thứ tư</option>
                                        <option value="5">Mũi tiêm năm</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin người đăng ký tiêm -->
                        <div class="in4">
                            <div class="col-md-12 col-12">
                                <label>1. Thông tin người đăng ký tiêm</label>
                            </div>
                        </div>

                        <!-- Họ tên - ngày sinh - giới tính - sđt -->
                        <div class="row htsdt">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <span class="text-danger">(*)</span>
                                    <input name="hoten_dktc" class="form-control" type="text" data-msg-required="Bạn chưa nhập họ tên" placeholder="Họ và tên">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <span class="text-danger">(*)</span> <br />
                                    <input name="ngaysinh_dktc" class="form-control" type="date" data-msg-required="Bạn chưa điền ngày sinh">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <span class="text-danger">(*)</span> <br />
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select name="gender_dktc" class="form-control" data-msg-required="Bạn chưa chọn giới tính">
                                                <option disabled>Chọn giới tính</option>
                                                <option selected>Nam</option>
                                                <option>Nữ</option>
                                                <option>Giới tính khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <span class="text-danger">(*)</span>
                                    <input name="sdt_dktc" class="form-control" type="tel" data-msg-required="Bạn chưa nhập số điện thoại" placeholder="Số điện thoại">
                                </div>
                            </div>
                        </div>

                        <!-- Email - CCCD - Số thẻ BHYT -->
                        <div class="row mailbhyt">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email_dktc" class="form-control" type="email" data-msg-required="Bạn chưa nhập Email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>CCCD/Mã định danh công dân</label>
                                    <span class="text-danger">(*)</span><br />
                                    <input name="cccd_dktc" class="form-control" type="text" data-msg-required="Bạn chưa nhập CCCD/Mã định danh công dân" placeholder="CCCD/Mã định danh công dân">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Số thẻ BHYT</label>
                                    <input name="bhyt_dktc" class="form-control" type="text" data-msg-required="Bạn chưa nhập số thẻ BHYT" placeholder="Số thẻ BHYT">
                                </div>
                            </div>
                        </div>

                        <!-- Nghề nghiệp - Đơn vị công tác - Dân tộc - Quốc tịch -->
                        <div class="row ngheqt">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Nghề nghiệp</label>
                                    <input name="job_dktc" class="form-control" type="text" placeholder="Nghề nghiệp">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Đơn vị công tác</label>
                                    <input name="congtac_dktc" class="form-control" type="text" placeholder="Đơn vị công tác">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Dân tộc</label>
                                    <span class="text-danger">(*)</span>
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select name="dantoc_dktc" class="form-control">
                                                <option disabled>Chọn dân tộc</option>
                                                <option selected value="Kinh">Kinh</option>
                                                <option value="Tày">Tày</option>
                                                <option value="Thái">Thái</option>
                                                <option value="Mường">Mường</option>
                                                <option value="Khmer">Khmer</option>
                                                <option value="Hoa">Hoa</option>
                                                <option value="Nùng">Nùng</option>
                                                <option value="Mông">Mông</option>
                                                <option value="Dao">Dao</option>
                                                <option value="Gia Rai">Gia Rai</option>
                                                <option value="Ê Đê">Ê Đê</option>
                                                <option value="Ba Na">Ba Na</option>
                                                <option value="Sán Chay">Sán Chay</option>
                                                <option value="Chăm">Chăm</option>
                                                <option value="Cơ Ho">Cơ Ho</option>
                                                <option value="Xơ Đăng">Xơ Đăng</option>
                                                <option value="Sán Dìu">Sán Dìu</option>
                                                <option value="Hrê">Hrê</option>
                                                <option value="RaGlay">RaGlay</option>
                                                <option value="Mnông">Mnông</option>
                                                <option value="Thổ (4)">Thổ (4)</option>
                                                <option value="Xtiêng">Xtiêng</option>
                                                <option value="Khơ Mú">Khơ Mú</option>
                                                <option value="Bru Vân Kiều">Bru Vân Kiều</option>
                                                <option value="Cơ Tu">Cơ Tu</option>
                                                <option value="Giáy">Giáy</option>
                                                <option value="Tà Ôi">Tà Ôi</option>
                                                <option value="Mạ">Mạ</option>
                                                <option value="Giẻ-Triêng">Giẻ-Triêng</option>
                                                <option value="Co">Co</option>
                                                <option value="Chơ Ro">Chơ Ro</option>
                                                <option value="Xinh Mun">Xinh Mun</option>
                                                <option value="Hà Nhì">Hà Nhì</option>
                                                <option value="Chu Ru">Chu Ru</option>
                                                <option value="Lào">Lào</option>
                                                <option value="La Chí">La Chí</option>
                                                <option value="Kháng">Kháng</option>
                                                <option value="Phù Lá">Phù Lá</option>
                                                <option value="La Hủ">La Hủ</option>
                                                <option value="La Ha">La Ha</option>
                                                <option value="Pà Thẻn">Pà Thẻn</option>
                                                <option value="Lự">Lự</option>
                                                <option value="Ngái">Ngái</option>
                                                <option value="Chứt">Chứt</option>
                                                <option value="Lô Lô">Lô Lô</option>
                                                <option value="Mảng">Mảng</option>
                                                <option value="Cơ Lao">Cơ Lao</option>
                                                <option value="Bố Y">Bố Y</option>
                                                <option value="Cống">Cống</option>
                                                <option value="Si La">Si La</option>
                                                <option value="Pu Péo">Pu Péo</option>
                                                <option value="Rơ Măm">Rơ Măm</option>
                                                <option value="Brâu">Brâu</option>
                                                <option value="Ơ Đu">Ơ Đu</option>
                                                <option value="Người nước ngoài">Người nước ngoài</option>
                                                <option value="Không rõ">Không rõ</option>
                                                <option value="Không xác định">Không xác định</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Quốc tịch</label>
                                    <span class="text-danger">(*)</span>
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select name="quoctich_dktc" class="form-control">
                                                <option value="Việt Nam" selected>Việt Nam</option>
                                                <option value="Trung Quốc">Trung Quốc</option>
                                                <option value="Campuchia">Campuchia</option>
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

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Địa chỉ - Tỉnh/Thành phố - Quận/Huyện - Xã/Phường -->
                        <div class="row dcxp">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ hiện tại</label>
                                    <span class="text-danger">(*)</span>
                                    <input name="diachi_dktc" class="form-control" type="text" data-msg-required="Bạn chưa nhập địa chỉ" placeholder="Địa chỉ hiện tại">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Tỉnh/Thành phố</label>
                                    <span class="text-danger">(*)</span>
                                    <input name="city_dktc" class="form-control" type="text" data-msg-required="Bạn chưa nhập tỉnh/thành phố" placeholder="Tỉnh/Thành phố">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Quận/Huyện</label>
                                    <span class="text-danger">(*)</span>
                                    <input name="quanhuyen_dktc" class="form-control" type="text" data-msg-required="Bạn chưa nhập quận/huyện" placeholder="Quận/Huyện">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Xã/Phường</label>
                                    <span class="text-danger">(*)</span>
                                    <input name="xaphuong_dktc" class="form-control" type="text" data-msg-required="Bạn chưa nhập xã/phường" placeholder="Xã/Phường">
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin đăng ký tiêm chủng -->
                        <div class="in4">
                            <div class="col-md-12 col-12">
                                <label>2. Thông tin đăng ký tiêm chủng</label>
                            </div>
                        </div>

                        <!-- Ngày tiêm - Buổi tiêm -->
                        <div class="row ngaybuoi">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Ngày tiêm mong muốn (dự kiến)</label>
                                    <input name="ngaytiem_dktc" class="form-control" type="date">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Buổi tiêm mong muốn (dự kiến)</label>
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select name="buoitiem_dktc" class="form-control">
                                                <option disabled selected>Chọn buổi tiêm</option>
                                                <option selected value="S">Buổi sáng</option>
                                                <option value="C">Buổi chiều</option>
                                                <option value="A">Cả ngày</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin đăng ký tiêm chủng -->
                        <div class="in4">
                            <div class="col-md-12 col-12">
                                <label>3. Tiền sử bệnh</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="table-responsive mt-1">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text_symptoms" translate="dau_hieu">Dấu hiệu</th>
                                                <th width="34%" class="text_symptoms" translate="dau_hieu">Triệu chứng</th>
                                                <th width="10%" class="text-center text_yes" translate="co">Có</th>
                                                <th width="10%" class="text-center text_no" translate="khong">Không</th>
                                                <th width="10%" class="text-center text_dontknow" translate="khong-ro">Không
                                                    rõ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="list-trieuchung">
                                            <tr>
                                                <td>1. Tiền sử phản vệ từ độ 2 trở lên<span class="text-danger">(*)</span>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts1" name="tiensu_Ts1" placeholder="Nếu có, ghi rõ loại tác nhân dị ứng"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts1" name="tiensu_phanve" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts1" name="tiensu_phanve" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts1" name="tiensu_phanve" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2. Tiền sử bị COVID-19 trong vòng 6 tháng<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label width="30%" class="Ts-text"><input class="form-control" type="text" id="Ts2" name="tiensu_Ts2" class="text-tiensu"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts2" name="tiensu_covid" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts2" name="tiensu_covid" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts2" name="tiensu_covid" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3. Tiền sử tiêm vắc-xin khác trong 14 ngày qua<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label width="30%" class="Ts-text"><input class="form-control" type="text" id="Ts3" name="tiensu_Ts4" class="text-tiensu" placeholder="Nếu có, ghi rõ loại vắc-xin"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts3" name="tiensu_vacxin" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts3" name="tiensu_vacxin" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts3" name="tiensu_vacxin" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4. Tiền sử suy giảm suy giảm miễn dịch, ung thư giai đoạn cuối, cắt
                                                    lách, xơ gan mất bù,...<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts4" name="tiensu_Ts4" class="text-tiensu"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts4" name="tiensu_suygiam" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts4" name="tiensu_suygiam" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts4" name="tiensu_suygiam" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5. Đang dùng thuốc ức chế miễn dịch, corticoid liều ca (tương đương hoặc
                                                    hơn 2 mg prednisolon/kh/ngày trong ít nhất 7 ngày) hoặc điều trị hóa
                                                    trị, xạ trị<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts5" name="tiensu_Ts5" class="text-tiensu"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts5" name="tiensu_dungthuoc" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts5" name="tiensu_dungthuoc" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts5" name="tiensu_dungthuoc" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6. Bệnh cấp tính<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts6" name="tiensu_Ts6" class="text-tiensu" placeholder="Nếu có, ghi rõ loại mắc bệnh"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts6" name="tiensu_captinh" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts6" name="tiensu_captinh" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts6" name="tiensu_captinh" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7. Tiền sử bệnh mạn tính, đang tiến triển<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts7" name="tiensu_Ts7" class="text-tiensu" placeholder="Nếu có, ghi rõ loại mắc bệnh"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts7" name="tiensu_mantinh" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts7" name="tiensu_mantinh" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts7" name="tiensu_mantinh" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Ghi chú -->
                        <div class="col-md-12 col-12">
                            <div class="form-group text-danger">
                                <label style="font-weight: 600!important; width:100%; font-style: italic;">Lưu ý:</label>
                                <li style="font-style: italic;">Việc đăng ký thông tin hoàn toàn bảo mật và phục vụ cho
                                    chiến dịch tiêm chủng Vắc-xin COVID-19.</li>
                                <li style="font-style: italic;">Xin vui lòng kiểm tra kỹ các thông tin bắt buộc (Các thông
                                    tin có dấu (*)).</li>
                                <li style="font-style: italic;">Bằng việc nhấn nút "Xác nhận", bạn hoàn toàn hiểu và đồng ý
                                    chịu trách nhiệm với các thông tin đã cung cấp.</li>
                                <li style="font-style: italic;">Nếu bạn dưới 18 tuổi, vui lòng nhập số điện thoại của người
                                    giám hộ để tra cứu.</li>
                            </div>
                        </div>

                        <hr>

                        <div class="form-inline">
                            <p class="col-mt-3 col-mt-3">
                                Sau khi đã đọc các thông tin nêu trên, tôi đã hiểu và:
                                <input name="dongy_dktc" class="form-control ng-untouched ng-pristine ng-valid" style="width: 20px; height: 20px;" type="checkbox" value="1">
                                <span style="font-weight: 600;">Đồng ý tiêm chủng</span>
                            </p>
                        </div>

                        <!-- Button -->
                        <div class="btn-box">
                            <button type="submit" onclick="window.location.href='/TH_WEB/public/DangKyTiemChung/index.php'" id="Cancel1">Nhập Lại</button>
                            <button type="submit" onchange="DangKyTiemChung()" name="save_dktc" id="Next1">Tiếp tục</button>
                        </div>

                    </form>

                    <!-- Form2 từ đây -->
                    <form id="form2">
                        <!-- PROGRESS -->
                        <div class="checkbox-row">
                            <div class="checkin4">
                                <input type="radio" name="in4" id="btn-dk_ban_than2" /> Đăng ký cho bản thân
                                <input type="radio" name="in4" id="btn-dk_nguoi_than2" value="" checked="checked" /> Đăng ký
                                cho người thân
                            </div>
                        </div>

                        <!-- Thông tin người đăng ký -->
                        <div class="in4">
                            <div class="col-md-12 col-12 info">
                                <label>1. Thông tin người giám hộ</label>
                            </div>
                        </div>

                        <div class="row ttndk">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập họ tên" placeholder="Họ và tên">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="tel" data-msg-required="Bạn chưa nhập số điện thoại" placeholder="Số điện thoại">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>
                                        Đăng ký mũi tiêm thứ
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select class="form-control">
                                        <option selected>Mũi tiêm thứ nhất</option>
                                        <option>Mũi tiêm thứ hai</option>
                                        <option>Mũi tiêm khác</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin người đăng ký tiêm -->
                        <div class="in4">
                            <div class="col-md-12 col-12 info">
                                <label>2. Thông tin người đăng ký tiêm</label>
                            </div>
                        </div>

                        <!-- Họ tên - ngày sinh - giới tính - sđt -->
                        <div class="row htsdt">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập họ tên" placeholder="Họ và tên">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <span class="text-danger">(*)</span> <br />
                                    <input class="form-control" type="date" data-msg-required="Bạn chưa điền ngày sinh">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <span class="text-danger">(*)</span> <br />
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select class="form-control" data-msg-required="Bạn chưa chọn giới tính">
                                                <option disabled selected>Chọn giới tính</option>
                                                <option>Nam</option>
                                                <option>Nữ</option>
                                                <option>Giới tính khác</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="tel" data-msg-required="Bạn chưa nhập số điện thoại" placeholder="Số điện thoại">
                                </div>
                            </div>
                        </div>

                        <!-- Email - CCCD - Số thẻ BHYT -->
                        <div class="row mailbhyt">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" data-msg-required="Bạn chưa nhập Email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>CCCD/Mã định danh công dân</label>
                                    <span class="text-danger">(*)</span><br />
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập CCCD/Mã định danh công dân" placeholder="CCCD/Mã định danh công dân">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Số thẻ BHYT</label>
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập số thẻ BHYT" placeholder="Số thẻ BHYT">
                                </div>
                            </div>
                        </div>

                        <!-- Nghề nghiệp - Đơn vị công tác - Dân tộc - Quốc tịch -->
                        <div class="row ngheqt">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Nghề nghiệp</label>
                                    <input class="form-control" type="text" placeholder="Nghề nghiệp">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Đơn vị công tác</label>
                                    <input class="form-control" type="text" placeholder="Đơn vị công tác">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Dân tộc</label>
                                    <span class="text-danger">(*)</span>
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select class="form-control">
                                                <option disabled selected>Chọn dân tộc</option>
                                                <option value="Kinh">Kinh</option>
                                                <option value="Tày">Tày</option>
                                                <option value="Thái">Thái</option>
                                                <option value="Mường">Mường</option>
                                                <option value="Khmer">Khmer</option>
                                                <option value="Hoa">Hoa</option>
                                                <option value="Nùng">Nùng</option>
                                                <option value="Mông">Mông/option>
                                                <option value="Dao">Dao</option>
                                                <option value="Gia Rai">Gia Rai</option>
                                                <option value="Ê Đê">Ê Đê</option>
                                                <option value="Ba Na">Ba Na</option>
                                                <option value="Sán Chay">Sán Chay</option>
                                                <option value="Chăm">Chăm</option>
                                                <option value="Cơ Ho">Cơ Ho</option>
                                                <option value="Xơ Đăng">Xơ Đăng</option>
                                                <option value="Sán Dìu">Sán Dìu</option>
                                                <option value="Hrê">Hrê</option>
                                                <option value="RaGlay">RaGlay</option>
                                                <option value="Mnông">Mnông</option>
                                                <option value="Thổ (4)">Thổ (4)</option>
                                                <option value="Xtiêng">Xtiêng</option>
                                                <option value="Khơ Mú">Khơ Mú</option>
                                                <option value="Bru Vân Kiều">Bru Vân Kiều</option>
                                                <option value="Cơ Tu">Cơ Tu</option>
                                                <option value="Giáy">Giáy</option>
                                                <option value="Tà Ôi">Tà Ôi</option>
                                                <option value="Mạ">Mạ</option>
                                                <option value="Giẻ-Triêng">Giẻ-Triêng</option>
                                                <option value="Co">Co</option>
                                                <option value="Chơ Ro">Chơ Ro</option>
                                                <option value="Xinh Mun">Xinh Mun</option>
                                                <option value="Hà Nhì">Hà Nhì</option>
                                                <option value="Chu Ru">Chu Ru</option>
                                                <option value="Lào">Lào</option>
                                                <option value="La Chí">La Chí</option>
                                                <option value="Kháng">Kháng</option>
                                                <option value="Phù Lá">Phù Lá</option>
                                                <option value="La Hủ">La Hủ</option>
                                                <option value="La Ha">La Ha</option>
                                                <option value="Pà Thẻn">Pà Thẻn</option>
                                                <option value="Lự">Lự</option>
                                                <option value="Ngái">Ngái</option>
                                                <option value="Chứt">Chứt</option>
                                                <option value="Lô Lô">Lô Lô</option>
                                                <option value="Mảng">Mảng</option>
                                                <option value="Cơ Lao">Cơ Lao</option>
                                                <option value="Bố Y">Bố Y</option>
                                                <option value="Cống">Cống</option>
                                                <option value="Si La">Si La</option>
                                                <option value="Pu Péo">Pu Péo</option>
                                                <option value="Rơ Măm">Rơ Măm</option>
                                                <option value="Brâu">Brâu</option>
                                                <option value="Ơ Đu">Ơ Đu</option>
                                                <option value="Người nước ngoài">Người nước ngoài</option>
                                                <option value="Không rõ">Không rõ</option>
                                                <option value="Không xác định">Không xác định</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Quốc tịch</label>
                                    <span class="text-danger">(*)</span>
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select class="form-control">
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
                        </div>

                        <!-- Địa chỉ - Tỉnh/Thành phố - Quận/Huyện - Xã/Phường -->
                        <div class="row dcxp">
                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Địa chỉ hiện tại</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập địa chỉ" placeholder="Địa chỉ hiện tại">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Tỉnh/Thành phố</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập tỉnh/thành phố" placeholder="Tỉnh/Thành phố">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Quận/Huyện</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập quận/huyện" placeholder="Quận/Huyện">
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="form-group">
                                    <label>Xã/Phường</label>
                                    <span class="text-danger">(*)</span>
                                    <input class="form-control" type="text" data-msg-required="Bạn chưa nhập xã/phường" placeholder="Xã/Phường">
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin đăng ký tiêm chủng -->
                        <div class="in4">
                            <div class="col-md-12 col-12 info">
                                <label>3. Thông tin đăng ký tiêm chủng</label>
                            </div>
                        </div>

                        <!-- Ngày tiêm - Buổi tiêm -->
                        <div class="row ngaybuoi">
                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label>Ngày tiêm mong muốn (dự kiến)</label>
                                    <input class="form-control" type="date">
                                </div>
                            </div>

                            <div class="col-md-4 col-12">
                                <div class="form-group">
                                    <label>Buổi tiêm mong muốn (dự kiến)</label>
                                    <div class="combobox-group">
                                        <div class="input-group combobox-control">
                                            <select class="form-control">
                                                <option disabled selected>Chọn buổi tiêm</option>
                                                <option>Buổi sáng</option>
                                                <option>Buổi chiều</option>
                                                <option>Cả ngày</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thông tin đăng ký tiêm chủng -->
                        <div class="in4">
                            <div class="col-md-12 col-12">
                                <label>4. Tiền sử bệnh</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <div class="table-responsive mt-1">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text_symptoms" translate="dau_hieu">Dấu hiệu</th>
                                                <th width="34%" class="text_symptoms" translate="dau_hieu">Triệu chứng</th>
                                                <th width="10%" class="text-center text_yes" translate="co">Có</th>
                                                <th width="10%" class="text-center text_no" translate="khong">Không</th>
                                                <th width="10%" class="text-center text_dontknow" translate="khong-ro">Không
                                                    rõ</th>
                                            </tr>
                                        </thead>
                                        <tbody id="list-trieuchung">
                                            <tr>
                                                <td>1. Tiền sử phản vệ từ độ 2 trở lên<span class="text-danger">(*)</span>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts1" name="tiensu_Ts1" placeholder="Nếu có, ghi rõ loại tác nhân dị ứng"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts1" name="tiensu_Ts1" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts1" name="tiensu_Ts1" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts1" name="tiensu_Ts1" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2. Tiền sử bị COVID-19 trong vòng 6 tháng<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label width="30%" class="Ts-text"><input class="form-control" type="text" id="Ts2" name="tiensu_Ts2" class="text-tiensu"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts2" name="tiensu_Ts2" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts2" name="tiensu_Ts2" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts2" name="tiensu_Ts2" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3. Tiền sử tiêm vắc-xin khác trong 14 ngày qua<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label width="30%" class="Ts-text"><input class="form-control" type="text" id="Ts3" name="tiensu_Ts4" class="text-tiensu" placeholder="Nếu có, ghi rõ loại vắc-xin"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts3" name="tiensu_Ts3" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts3" name="tiensu_Ts3" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts3" name="tiensu_Ts3" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4. Tiền sử suy giảm suy giảm miễn dịch, ung thư giai đoạn cuối, cắt
                                                    lách, xơ gan mất bù,...<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts4" name="tiensu_Ts4" class="text-tiensu"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts4" name="tiensu_Ts4" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts4" name="tiensu_Ts4" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts4" name="tiensu_Ts4" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>5. Đang dùng thuốc ức chế miễn dịch, corticoid liều ca (tương đương hoặc
                                                    hơn 2 mg prednisolon/kh/ngày trong ít nhất 7 ngày) hoặc điều trị hóa
                                                    trị, xạ trị<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts5" name="tiensu_Ts5" class="text-tiensu"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts5" name="tiensu_Ts5" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts5" name="tiensu_Ts5" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts5" name="tiensu_Ts5" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6. Bệnh cấp tính<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts6" name="tiensu_Ts6" class="text-tiensu" placeholder="Nếu có, ghi rõ loại mắc bệnh"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts6" name="tiensu_Ts6" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts6" name="tiensu_Ts6" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts6" name="tiensu_Ts6" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7. Tiền sử bệnh mạn tính, đang tiến triển<span class="text-danger">(*)</span></td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-text"><input class="form-control" type="text" id="Ts7" name="tiensu_Ts7" class="text-tiensu" placeholder="Nếu có, ghi rõ loại mắc bệnh"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="Ts-radio"><input type="radio" id="Ts7" name="tiensu_Ts7" class="radio-tiensu" value="2"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts7" name="tiensu_Ts7" class="radio-tiensu" value="1"></label>
                                                </td>
                                                <td class="text-center td-center">
                                                    <label class="lb-radio"><input type="radio" id="Ts7" name="tiensu_Ts7" class="radio-tiensu" value="0" checked=""></label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Ghi chú -->
                        <div class="col-md-12 col-12">
                            <div class="form-group text-danger">
                                <label style="font-weight: 600!important; width:100%; font-style: italic;">Lưu ý:</label>
                                <li style="font-style: italic;">Việc đăng ký thông tin hoàn toàn bảo mật và phục vụ cho
                                    chiến dịch tiêm chủng Vắc-xin COVID-19.</li>
                                <li style="font-style: italic;">Xin vui lòng kiểm tra kỹ các thông tin bắt buộc (Các thông
                                    tin có dấu (*)).</li>
                                <li style="font-style: italic;">Bằng việc nhấn nút "Xác nhận", bạn hoàn toàn hiểu và đồng ý
                                    chịu trách nhiệm với các thông tin đã cung cấp.</li>
                                <li style="font-style: italic;">Nếu bạn dưới 18 tuổi, vui lòng nhập số điện thoại của người
                                    giám hộ để tra cứu.</li>
                            </div>
                        </div>

                        <hr>

                        <div class="form-inline">
                            <p class="col-mt-3 col-mt-3">
                                Sau khi đã đọc các thông tin nêu trên, tôi đã hiểu và:
                                <input class="form-control ng-untouched ng-pristine ng-valid" style="width: 20px; height: 20px;" type="checkbox">
                                <span style="font-weight: 600;">Đồng ý tiêm chủng</span>
                            </p>
                        </div>

                        <!-- Button -->
                        <div class="btn-box">
                            <button type="button" id="Cancel2" href>Nhập lại</button>
                            <button name="Next2" type="button" id="Next2">Tiếp tục</button>
                        </div>
                    </form>

                    <!-- Form3 từ đây -->

                </form>


                <form id="form3">
                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label style="font-weight: 600!important; width:100%; font-style: italic;">Khuyến
                                cáo:</label>
                            <label style="font-style: italic;">1. Tiêm chủng vắc-xin là biện pháp phòng chống dịch hiệu
                                quả, tuy nhiên vắc-xin phòng COVID-19 có thể không phòng được bệnh hoàn toàn. Người được
                                tiêm chủng vắc-xin phòng COVID-19 có thể phòng được bệnh hoặc giảm mức độ nặng nếu mắc
                                bệnh. Tuy nhiên, sau khi tiêm chủng vẫn phải tiếp tục thực hiện nghiêm túc các biện pháp
                                phòng chống dịch theo quy định.</label>
                            <label style="font-style: italic;">2. Tiêm chủng vắc-xin phòng COVID-19 có thể gây ra một số
                                biểu hiện tại chỗ tiêm hoặc toàn thân như
                                sưng, đau chỗ tiêm, nhức đầu, buồn nôn, đau cơ,... hoặc tai biến nắng sau khi tiêm
                                chủng.</label>
                            <label style="font-style: italic;">3. Khi có triệu chứng bất thường về sức khỏe, người được
                                tiêm chủng cần đến ngay cơ sở y tế gần nhất
                                để được tư vấn, thăm khám và điều trị kịp thời.</label>
                        </div>


                        <div class="btn-box">
                            <button type="button" id="Back1">Quay lại</button>
                            <button type="submit" id="Submit" name="submit_dktc">Xác nhận</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Phần phản ánh -->
    <section class="body1" id="body1">
        <div class="formchinh" id="formchinh_1">
            <center>
                <div class="national-brand text-center mb-15">
                    <div class="text-uppercase" style="font-size: 25px;"> <br />
                        <b>Phản ánh thông tin tiêm chủng</b>
                    </div>
                    <div class="slogan"></div>
                </div>
                <div class="text-center text-uppercase">
                    <div class="">( Phòng chống dịch COVID-19 )</div>
                    <div class="" style="color: rgb(191, 3, 25);font-size: 15px ;"><br /><b>Khuyến cáo: Phản ánh thông
                            tin sai là vi phạm pháp luật Việt Nam và có thể xử lý hình sự</b></div> <br />
                </div>
            </center>

            <div class="includes">
                <form id="form4" method="post">
                    <?php
                    include 'C:\xampp\htdocs\TH_WEB\module_xntc.php' ?>
                    <div class="in4">
                        <div class="col-md-12 col-12">
                            <label>1. Thông tin người phản ánh</label>
                        </div>
                    </div>

                    <!-- Họ tên - ngày sinh - giới tính -->
                    <div class="row htgt">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Họ tên không được bỏ trống" placeholder="Họ và tên" name="hoten_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <span class="text-danger">(*)</span> <br />
                                <input class="form-control" type="date" data-msg-required="Ngày sinh không được bỏ trống" name="ngaysinh_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Giới tính</label>
                                <span class="text-danger">(*)</span> <br />
                                <div class="combobox-group">
                                    <div class="input-group combobox-control">
                                        <select class="form-control" data-msg-required="Vui lòng chọn giới tính" name="gioitinh_xntc">
                                            <option disabled>Chọn giới tính</option>
                                            <option selected>Nam</option>
                                            <option>Nữ</option>
                                            <option>Giới tính khác</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row sdthc">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="tel" data-msg-required="Số điện thoại không được bỏ trống" placeholder="Số điện thoại" name="sdt_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>CCCD/Mã định danh công dân</label>
                                <span class="text-danger">(*)</span><br />
                                <input class="form-control" type="text" data-msg-required="CCCD/Mã định danh công dân không được bỏ trống" placeholder="CCCD/Mã định danh công dân" name="cccd_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Hộ chiếu</label>
                                <input class="form-control" type="text" placeholder="Hộ chiếu" name="hochieu_xntc">
                            </div>
                        </div>
                    </div>

                    <!-- Địa chỉ -->
                    <div class="row dc">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label>Địa chỉ hiện tại</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Địa chỉ không được bỏ trống" placeholder="Địa chỉ hiện tại" name="diachihientai_xntc">
                            </div>
                        </div>
                    </div>

                    <!-- Tỉnh/Thành phố - Quận/Huyện - Xã/Phường -->
                    <div class="row tpxp">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Tỉnh/Thành phố</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Tỉnh/thành phố không được bỏ trống" placeholder="Tỉnh/Thành phố" name="tinh_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Quận/Huyện</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Quận/huyện không được bỏ trống" placeholder="Quận/Huyện" name="quanhuyen_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Xã/Phường</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Xã/phường không được bỏ trống" placeholder="Xã/Phường" name="xaphuong_xntc">
                            </div>
                        </div>
                    </div>

                    <!-- Nghề nghiệp - Đơn vị công tác - Dân tộc - Quốc tịch -->
                    <div class="row ngheqt">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Họ và tên người giám hộ</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Họ và tên người giám hộ không được bỏ trống" placeholder="Họ và tên người giám hộ" name="tengiamho_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Quan hệ</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Quan hệ không được bỏ trống" placeholder="Quan hệ" name="quanhe_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Số điện thoại người giám hộ</label>
                                <span class="text-danger">(*)</span>
                                <input class="form-control" type="text" data-msg-required="Số điện thoại người giám hộ không được bỏ trống" placeholder="Số điện thoại người giám hộ" name="sdtgiamho_xntc">
                            </div>
                        </div>
                    </div>

                    <!-- Thông tin mũi tiêm -->
                    <div class="in4">
                        <div class="col-md-12 col-12">
                            <label>2. Thông tin mũi tiêm</label>
                        </div>
                    </div>

                    <div class="row dky">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>
                                    Số mũi bạn đã tiêm
                                    <span class="text-danger">(*)</span>
                                </label>
                                <select name="muidatiem_xntc" class="form-control" data-msg-required="Số mũi bạn đã tiêm không được bỏ trống">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="in4">
                        <div class="col-md-12 col-12">
                            <label>Thông tin mũi tiêm 1</label>
                        </div>
                    </div>

                    <div class="row mt1">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Loại vắc xin</label>
                                <span class="text-danger">(*)</span><br />
                                <div class="combobox-group">
                                    <div class="input-group combobox-control">
                                        <select class="form-control" data-msg-required="Bạn phải chọn vắc-xin" name="vaccin1_xntc">
                                            <option disabled selected>Vui lòng chọn loại vắc-xin</option>
                                            <option value="Astra">COVID-19 Vaccine Astrazeneca</option>
                                            <option value="Pfizer">COVID-19 Vaccine Comirnaty (Pfizer)</option>
                                            <option value="Moderna">COVID-19 Vaccine Moderna</option>
                                            <option value="VeroCell">COVID-19 Vaccine (Vero Cell), Inactived</option>
                                            <option value="Sputnik V">Vaccine Gam - COVID - Vac (SPUTNIK V)</option>
                                            <option value="Abdala">COVID-19 Vaccine Abdala</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Số lô</label>
                                <input class="form-control" type="text" placeholder="Số lô" name="solo1_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Ngày tiêm</label>
                                <span class="text-danger">(*)</span> <br />
                                <input class="form-control" type="date" data-msg-required="Ngày tiêm không được để trống" name="ngaytiem1_xntc">
                            </div>
                        </div>
                    </div>

                    <div class="in4">
                        <div class="col-md-12 col-12">
                            <label>Thông tin mũi tiêm 2</label>
                        </div>
                    </div>

                    <div class="row mt2">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Loại vắc xin</label>
                                <span class="text-danger">(*)</span><br />
                                <div class="combobox-group">
                                    <div class="input-group combobox-control">
                                        <select class="form-control" data-msg-required="Bạn phải chọn vắc-xin" name="vaccin2_xntc">
                                            <option disabled selected>Vui lòng chọn loại vắc-xin</option>
                                            <option value="Astra">COVID-19 Vaccine Astrazeneca</option>
                                            <option value="Pfizer">COVID-19 Vaccine Comirnaty (Pfizer)</option>
                                            <option value="Moderna">COVID-19 Vaccine Moderna</option>
                                            <option value="VeroCell">COVID-19 Vaccine (Vero Cell), Inactived</option>
                                            <option value="Sputnik V">Vaccine Gam - COVID - Vac (SPUTNIK V)</option>
                                            <option value="Abdala">COVID-19 Vaccine Abdala</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Số lô</label>
                                <input class="form-control" type="text" placeholder="Số lô" name="solo2_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Ngày tiêm</label>
                                <span class="text-danger">(*)</span> <br />
                                <input class="form-control" type="date" data-msg-required="Ngày tiêm không được để trống" name="ngaytiem2_xntc">
                            </div>
                        </div>
                    </div>

                    <div class="in4">
                        <div class="col-md-12 col-12">
                            <label>Thông tin mũi tiêm 3</label>
                        </div>
                    </div>

                    <div class="row mt3">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Loại vắc xin</label>
                                <span class="text-danger">(*)</span><br />
                                <div class="combobox-group">
                                    <div class="input-group combobox-control">
                                        <select class="form-control" data-msg-required="Bạn phải chọn vắc-xin" name="vaccin3_xntc">
                                            <option disabled selected>Vui lòng chọn loại vắc-xin</option>
                                            <option value="Astra">COVID-19 Vaccine Astrazeneca</option>
                                            <option value="Pfizer">COVID-19 Vaccine Comirnaty (Pfizer)</option>
                                            <option value="Moderna">COVID-19 Vaccine Moderna</option>
                                            <option value="VeroCell">COVID-19 Vaccine (Vero Cell), Inactived</option>
                                            <option value="Sputnik V">Vaccine Gam - COVID - Vac (SPUTNIK V)</option>
                                            <option value="Abdala">COVID-19 Vaccine Abdala</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Số lô</label>
                                <input class="form-control" type="text" placeholder="Số lô" name="solo3_xntc">
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label>Ngày tiêm</label>
                                <span class="text-danger">(*)</span> <br />
                                <input class="form-control" type="date" data-msg-required="Ngày tiêm không được để trống" name="ngaytiem3_xntc">
                            </div>
                        </div>
                    </div>

                    <!-- Thông tin mũi tiêm -->
                    <div class="in4">
                        <div class="col-md-12 col-12">
                            <label>3. Thông tin chứng nhận tiêm chủng </label>
                        </div>
                    </div>

                    <!-- Example -->
                    <div class="drop-zone">
                        <span class="drop-zone__prompt">KÉO THẢ ẢNH HOẶC CHỌN FILE ĐỂ TẢI LÊN</span>
                        <input type="file" name="myFile" class="drop-zone__input" name="filexacnhan_xntc">
                    </div>

                    <!-- <label>Vui lòng nhập mã OTP</label> -->

                    <div class="col-md-12 col-12">
                        <hr>

                        <div class="form-inline" style="margin-top: 15px; margin-bottom: 15px;">
                            <p class="col-mt-5 col-mt-5">
                                <span style="font-weight: 600;">Vui lòng nhập mã OTP:</span>
                                <input class="form-control" type="text" style="margin-top:5px;">
                                <span><button type="button" style="margin-top:5px;">Gửi mã</button></span>
                            </p>
                        </div>

                    </div>

                    <!-- Ghi chú -->
                    <div class="col-md-12 col-12">
                        <div class="form-group text-danger">
                            <label style="font-weight: 600!important; width:100%; font-style: italic;">Khuyến
                                cáo:</label>
                            <label style="font-style: italic;">* Xin vui lòng kiểm tra kỹ các thông tin bắt buộc (VD: Họ
                                và tên, Ngày sinh, Số điện thoại,...).</label>
                            <label style="font-style: italic;">* Các thông tin bắt buộc phải giống với thông tin được
                                ghi trên "Giấy xác nhận đã tiêm Vắc-xin COVID-19" (Không viết tắt, nhập đúng và đủ thông
                                tin).</label>
                            <label style="font-style: italic;">* Cá nhân phản ánh thành công trên hệ thống sẽ được đưa
                                vào danh sách xử lý. Kết quả xử lý sẽ thông báo qua số điện thoại bạn đăng ký ở
                                trên.</label>
                            <label style="font-style: italic;">* Bằng việc nhấn nút "Gửi phản hồi", bạn đã xác nhận các
                                thông tin đã cung cấp là chính xác và đồng ý chịu trách nhiệm trước pháp luật với thông
                                tin cung cấp.</label>
                            <label style="font-style: italic;">* Trân trọng cảm ơn!</label>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="btn-box">
                        <button type="button" id="Again">Nhập lại</button>
                        <button type="submit" id="Submit1" name="submit_xntc" style="margin-top:5px;" onchange="XacNhanTiemChung()">Gửi phản
                            hồi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Nút phản ánh -->
    <b><button class="btn-phananh" id="paBtn" title="Phản ánh thông tin">Phản ánh thông tin</button></b>

    <!-- footer section starts  -->
    <div id="footer">
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
    </div>

    <!-- footer section ends -->
    <script src="SCRIPT.JS"></script>
</body>

</html>