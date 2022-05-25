<?php

require_once 'C:\xampp\htdocs\TH_WEB\config.php';


if (empty(session_id()) && !headers_sent()) {
	session_start();
}


$ac_sdt_dangnhap = $_POST['sdt_dangnhap'] ?? '';
$ac_matkhau_dangnhap = $_POST['matkhau_dangnhap'] ?? '';
function DangNhap()
{

	if (isset($_POST['submit_dangnhap'])) {
		global $ac_sdt_dangnhap;
		global $ac_matkhau_dangnhap;

		$conn = mysqli_connect(HOST, USER, PASSWORD, DB);
		$s = "select* from tb_account where ac_sdt = '$ac_sdt_dangnhap' and ac_matkhau = '$ac_matkhau_dangnhap'";
		$result = mysqli_query($conn, $s);
		$num = mysqli_num_rows($result);
		if ($num) {
			echo "<script>alert('Đăng nhập thành công')</script>";
			$_SESSION['sdt'] = $ac_sdt_dangnhap;
			$_SESSION['matkhau'] = $ac_matkhau_dangnhap;
			header("location: /TH_WEB/public/TaiKhoanCaNhan/index.php");
			
		} else {
			echo "<script>alert('Đăng nhập thất bại')</script>";
		}
	}
}
DangNhap();







function DangKy()
{
	if (isset($_POST['submit_dangky'])) {
		$conn = mysqli_connect(HOST, USER, PASSWORD, DB);
		$ac_sdt = $_POST['sdt_dangky']  ?? '';
		$ac_matkhau = $_POST['matkhau_dangky'] ?? '';
		$s = "select* from tb_account where ac_sdt = '$ac_sdt'";
		$result = mysqli_query($conn, $s);
		$num = mysqli_num_rows($result);
		if ($num) {
			echo "<script>alert('Đã tồn tại số điện thoại')</script>";
		} else {
			if (strlen(trim($ac_matkhau)) < 6) {
				echo "<script>alert('Mật khẩu phải trên 6 ký tự')</script>";
			} else {
				$query = "INSERT INTO tb_account(ac_sdt, ac_matkhau) VALUES ('$ac_sdt','$ac_matkhau')";
				$insert = mysqli_query($conn, $query);
				if (!$insert) {
					echo "<script>alert('Đăng nhập thất bài')</script>";
				} else {

					echo "<script>alert('Đăng Ký Thành Công')</script>";
				}
			}
		}
	}
}
DangKy();

function HienThiThongTin($ac_sdt_dangnhap,$ac_matkhau_dangnhap)
{
	
	// $_SESSION['sdt']= isset($_POST['sdt_dangnhap']);
	// $_SESSION['matkhau']= isset($_POST['matkhau_dangnhap']);
	$conn = mysqli_connect(HOST, USER, PASSWORD, DB);
	$query = "SELECT * FROM tb_account,tb_xntc,tb_user where tb_account.ac_sdt='" . $ac_sdt_dangnhap . "' AND tb_account.ac_matkhau='" . $ac_matkhau_dangnhap . "' AND tb_xntc.user_sdt='" . $ac_sdt_dangnhap . "' AND tb_user.user_sdt_= '" . $ac_sdt_dangnhap . "';";
	$dataset = mysqli_query($conn, $query);
	$User = mysqli_fetch_assoc($dataset);
	
	if ($User) {

		echo " <section class='bodyweb' id='bodyweb'>
		<div class='row'><br />
		</div>
		<div class='container big' id='container-big'>
			<center>
				<div class='national-brand text-center'>
					<br />
					<div class='text header1'><b>THÔNG TIN Y TẾ CÁ NHÂN</b></div>
				</div>
				<br />
			</center>
			<div class='container in4'>
				<div class='luuy'> *Quét mã QR để xem thông tin chi tiết và khai báo y tế nhanh hơn tại khu vực đi/đến
				</div> <br />
				<div class='card-columns'>
					<div class='card quetQR1 col-6'>
						<p class='thecovid'> Thẻ COVID-19</p>
						<img src='https://printgo.vn/uploads/media/790919/tao-ma-qr-code-san-pham-1_1620927223.jpg'
							class='qrcode' alt='DungMinh'> <br />
						<div class='main'>
							<h4 class='yourname'>" . $User['user_hoten']. "</h4>
							<p class='bday'>" . $User['user_gioitinh'] . " - " . $User['user_ngaysinh'] . "</p>
							<p class='dchi'>Địa chỉ: " . $User['user_quanhuyen'] . ", " . $User['user_tinh'] . "</p>
							<p class='sdtuser'>Số điện thoại: " . $User['user_sdt_'] . "</p>
							<p class='cmndcccd'>CMND/CCCD: " . $User['user_cccd'] . "</p>
						</div>
					</div>
					<div class='card quetQR2 col-6'>
						<!-- hàng 1 thông tin chung mũi tiêm và xnghiem -->
						<div class='row'>
							<div class='col-6 col-md-6 tiem'>
								<div class='tiem'>
									<div class='somuitiem-img'>
										<img class='img-somuitiem'
											src='https://cdn-icons-png.flaticon.com/512/1256/1256549.png?w=740'>
									</div>
									<div class='somuitiem-title'>
										Số mũi tiêm: <span class='id1'>" . $User['user_muidatiem'] . "</span>
									</div>
								</div>
							</div>
							<div class='col-6 col-md-6 xn'>
								<div class='xn-feature'>
									<div class='xn-img'>
										<img class='img-xn'
											src='https://cdn-icons-png.flaticon.com/512/1256/1256546.png?w=740'>
									</div>
									<div class='xn-title'>
										Thông tin xét nghiệm: Chưa có
									</div>
								</div>
							</div>
						</div>
						<hr>
						<!-- hàng 2 là lịch sử chi tiết kbyt và lịch sử tiêm chủng -->
						<div class='row'>
							<div class='col-6 col-md-6 thanhphan1'>
								<div class='kbytcanhan'>
									<div class='kbytcanhan-img'>
										<img class='img-1'
											src='https://cdn-icons-png.flaticon.com/512/1249/1249948.png?w=740'>
									</div>
									<div class='kbytcanhan-title'>
										Lịch sử khai báo y tế
									</div>
								</div>
							</div>
							<div class='col-6 col-md-6 thanhphan2'>
								<div class='muidatiem-feature'>
									<div class='in4muidatiem-img' '>
												<img class=' img-vaccin'
										src='https://cdn-icons-png.flaticon.com/512/1021/1021533.png?w=740'>
									</div>
									<div class='vaccin-title'>
										Thông tin mũi đã tiêm
									</div>
								</div>
							</div>
	  
	  
						</div>
						<hr>
						<!-- hàng 3 là gop y -->
						<div class='row'>
							<div class='col-6 col-md-4 gopy1'>
								<div class='gopytype1'>
									<div class='gopy-img'>
										<img class='img-gopy'
											src='https://cdn-icons-png.flaticon.com/512/1211/1211798.png?w=740'>
									</div>
									<div class='gopy-title'>
										Gửi góp ý
									</div>
								</div>
							</div>
							<div class='col-6 col-md-8 gopy2'>
								<div class='text_gopy-feature'>
									<div class='vaccin-title'>
										<div class='form-group'>
											<span class='gopytype'>Góp ý:</span>
										</div>
										<textarea rows='3' class='form-control input_note'
											placeholder='Hãy nhập góp ý của bạn cho chúng mình nhé'
											data-bind='value:ghi_chu'>
													</textarea>
									</div>
	  
								</div>
	  
								<div>
									<br />
									<button type='submit' class='btn gopy' id='gopy'
										style='align-items:center;'>Gửi</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- thẻ covid thông tin cá nhân -->
	  
			</div>
		</div>
	  
	  </section>
	  ";
	} else {

		echo " <section class='bodyweb' id='bodyweb'>
		<div class='row'><br />
		</div>
		<div class='container big' id='container-big'>
			<center>
				<div class='national-brand text-center'>
					<br />
					<div class='text header1'><b>THÔNG TIN Y TẾ CÁ NHÂN</b></div>
				</div>
				<br />
			</center>
			<div class='container in4'>
				<div class='luuy'> *Quét mã QR để xem thông tin chi tiết và khai báo y tế nhanh hơn tại khu vực đi/đến
				</div> <br />
				<div class='card-columns'>
					<div class='card quetQR1 col-6'>
						<p class='thecovid'> Thẻ COVID-19</p>
						<img src='https://printgo.vn/uploads/media/790919/tao-ma-qr-code-san-pham-1_1620927223.jpg'
							class='qrcode' alt='DungMinh'> <br />
						<div class='main'>
							<h4 class='yourname'>Chưa có dữ liệuiiii 	</h4>
							<p class='bday'>Chưa có dữ liệu</p>
							<p class='dchi'>Địa chỉ: Chưa có dữ liệu</p>
							<p class='sdtuser'>Số điện thoại: Chưa có dữ liệu</p>
							<p class='cmndcccd'>CMND/CCCD: Chưa có dữ liệu</p>
						</div>
					</div>
					<div class='card quetQR2 col-6'>
						<!-- hàng 1 thông tin chung mũi tiêm và xnghiem -->
						<div class='row'>
							<div class='col-6 col-md-6 tiem'>
								<div class='tiem'>
									<div class='somuitiem-img'>
										<img class='img-somuitiem'
											src='https://cdn-icons-png.flaticon.com/512/1256/1256549.png?w=740'>
									</div>
									<div class='somuitiem-title'>
										Số mũi tiêm: <span class='id1'>...</span>
									</div>
								</div>
							</div>
							<div class='col-6 col-md-6 xn'>
								<div class='xn-feature'>
									<div class='xn-img'>
										<img class='img-xn'
											src='https://cdn-icons-png.flaticon.com/512/1256/1256546.png?w=740'>
									</div>
									<div class='xn-title'>
										Thông tin xét nghiệm: Chưa có
									</div>
								</div>
							</div>
						</div>
						<hr>
						<!-- hàng 2 là lịch sử chi tiết kbyt và lịch sử tiêm chủng -->
						<div class='row'>
							<div class='col-6 col-md-6 thanhphan1'>
								<div class='kbytcanhan'>
									<div class='kbytcanhan-img'>
										<img class='img-1'
											src='https://cdn-icons-png.flaticon.com/512/1249/1249948.png?w=740'>
									</div>
									<div class='kbytcanhan-title'>
										Lịch sử khai báo y tế
									</div>
								</div>
							</div>
							<div class='col-6 col-md-6 thanhphan2'>
								<div class='muidatiem-feature'>
									<div class='in4muidatiem-img' '>
												<img class=' img-vaccin'
										src='https://cdn-icons-png.flaticon.com/512/1021/1021533.png?w=740'>
									</div>
									<div class='vaccin-title'>
										Thông tin mũi đã tiêm
									</div>
								</div>
							</div>
	  
	  
						</div>
						<hr>
						<!-- hàng 3 là gop y -->
						<div class='row'>
							<div class='col-6 col-md-4 gopy1'>
								<div class='gopytype1'>
									<div class='gopy-img'>
										<img class='img-gopy'
											src='https://cdn-icons-png.flaticon.com/512/1211/1211798.png?w=740'>
									</div>
									<div class='gopy-title'>
										Gửi góp ý
									</div>
								</div>
							</div>
							<div class='col-6 col-md-8 gopy2'>
								<div class='text_gopy-feature'>
									<div class='vaccin-title'>
										<div class='form-group'>
											<span class='gopytype'>Góp ý:</span>
										</div>
										<textarea rows='3' class='form-control input_note'
											placeholder='Hãy nhập góp ý của bạn cho chúng mình nhé'
											data-bind='value:ghi_chu'>
													</textarea>
									</div>
	  
								</div>
	  
								<div>
									<br />
									<button type='submit' class='btn gopy' id='gopy'
										style='align-items:center;'>Gửi</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- thẻ covid thông tin cá nhân -->
	  
			</div>
		</div>
	  
	  </section>
		
		";
	}
}

