<?php
require_once 'C:\xampp\htdocs\TH_WEB\config.php';

function XacNhanTiemChung(){
	if(isset($_POST['submit_xntc'])){

		$conn= mysqli_connect(HOST,USER,PASSWORD,DB);

		$user_hoten = $_POST['hoten_xntc'] ?? '';
		$user_ngaysinh =$_POST['ngaysinh_xntc'] ?? '';
		$user_gioitinh=$_POST['gioitinh_xntc'] ?? '';
		$user_sdt=$_POST['sdt_xntc'] ?? '';
		$user_cccd=$_POST['cccd_xntc'] ?? '';
		// $user_hochieu=$_POST['hochieu_xntc'] ?? '';
		$user_sonha=$_POST['diachihientai_xntc'] ?? '';
		$user_tinh=$_POST['tinh_xntc'] ?? '';
		$user_quanhuyen=$_POST['quanhuyen_xntc'] ?? '';
		$user_xaphuong=$_POST['xaphuong_xntc'] ?? '';
		
		// $user_quoctich = $_POST['quoctich_xntc'] ?? '';
		$user_tengiam=$_POST['tengiamho_xntc'] ?? '';
		$user_quanhe = $_POST['quanhe_xntc'] ?? '';
		$user_sdtgiam =$_POST['sdtgiamho_xntc'] ?? '';
		$user_muidatiem =$_POST['muidatiem_xntc'] ?? '';
		$user_vaccin1=$_POST['vaccin1_xntc'] ?? '';
		$user_solo1=$_POST['solo1_xntc'] ?? '';
		$user_date1=$_POST['ngaytiem1_xntc'] ?? '';
		$user_vaccin2=$_POST['vaccin2_xntc'] ?? '';
		$user_solo2=$_POST['solo2_xntc'] ?? '';
		$user_date2=$_POST['ngaytiem2_xntc'] ?? '';
		$user_vaccin3=$_POST['vaccin3_xntc'] ?? '';
		$user_solo3=$_POST['solo3_xntc'] ?? '';
		$user_date3=$_POST['ngaytiem3_xntc'] ?? '';
		$user_xacnhan=$_POST['filexacnhan_xntc'] ?? '';
		
		
		$query1 = "INSERT INTO tb_user(user_hoten, user_ngaysinh, user_gioitinh, user_sdt_, user_cccd, user_sonha, user_tinh, user_quanhuyen, user_xaphuong) 
		VALUES ('$user_hoten','$user_ngaysinh','$user_gioitinh','$user_sdt','$user_cccd','$user_sonha','$user_tinh','$user_quanhuyen','$user_xaphuong')";
		
		$query2 ="INSERT INTO tb_xntc(user_sdt, user_tengiam, user_quanhe, user_sdtgiam, user_muidatiem, user_vaccin1, user_solo1, user_date1, user_vaccin2, user_solo2, user_date2, user_vaccin3, user_solo3, user_date3, user_xacnhan) 
		VALUES ('$user_sdt','$user_tengiam','$user_quanhe','$user_sdtgiam','$user_muidatiem','$user_vaccin1','$user_solo1','$user_date1','$user_vaccin2','$user_solo2','$user_date2','$user_vaccin3','$user_solo3','$user_date3','$user_xacnhan')";
		$insert1 = mysqli_query($conn,$query1);
		$insert2 = mysqli_query($conn,$query2);
		if(!$insert1 or !$insert2){
			echo"<script>alert('Đã có lỗi trong quá trình nhập liệu')</script>";
			echo"Lỗi :".mysqli_error($conn);
		}
		else{
			echo "<script>alert('Đã gửi xác nhận')</script>";
		}
		}

}
XacNhanTiemChung();



?>