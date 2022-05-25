<?php 
require_once 'C:\xampp\htdocs\TH_WEB\config.php';
function KhaiBaoYTe() {
	$conn= mysqli_connect(HOST,USER,PASSWORD,DB);
	if(isset($_POST['submit'])){
		$user_hoten = $_POST['fullname_kbyt']  ?? '';
		$user_cccd =$_POST['passport_kbyt'] ?? '';
		$user_sdt=$_POST['sdt_kbyt'] ?? '';
		$user_ngaysinh=$_POST['birthday_kbyt'] ?? '';
		$user_gioitinh=$_POST['gender_kbyt'] ?? '';
		$user_quoctich=$_POST['quoctich_kbyt'] ?? '';
		$user_sonha=$_POST['sonha_kbyt'] ?? '';
		$user_xaphuong=$_POST['xaphuong_kbyt'] ?? '';
		$user_quanhuyen=$_POST['quanhuyen_kbyt'] ?? '';
		$user_tinh=$_POST['tinh_kbyt'] ?? '';
		$user_email=$_POST['email_kbyt'] ?? '';
		
		$user_trieuchung_sot=$_POST['trieuchung_sot_kbyt'] ?? '';
		$user_trieuchung_ho=$_POST['trieuchung_ho_kbyt'] ?? '';
		$user_trieuchung_dauhong=$_POST['trieuchung_dauhong_kbyt'] ?? '';
		$user_trieuchung_matmui=$_POST['trieuchung_matmui_kbyt'] ?? '';
		$user_trieuchung_met=$_POST['trieuchung_met_kbyt'] ?? '';
		$user_trieuchung_khotho=$_POST['trieuchung_khotho_kbyt'] ?? '';
		$user_dichte_tiepxuc=$_POST['dichte_tiepxuc_kbyt'] ?? '';
		$user_dichte_benh=$_POST['dichte_benh_kbyt'] ?? '';
		$user_dichte_quocgiapassing=$_POST['dichte_quocgiapassing_kbyt'] ?? '';
		$user_dichte_dieutri=$_POST['dichte_dieutri_kbyt'] ?? '';
		$user_trieuchung_textarea=$_POST['textarea_kbyt'] ?? '';
	
		$query1 = "INSERT INTO tb_user(user_hoten, user_ngaysinh, user_gioitinh, user_sdt_, user_email,user_cccd, user_quoctich, user_sonha, user_tinh, user_quanhuyen, user_xaphuong) 
		VALUES ('$user_hoten','$user_ngaysinh','$user_gioitinh','$user_sdt','$user_email','$user_cccd','$user_quoctich','$user_sonha','$user_tinh','$user_quanhuyen','$user_xaphuong')";
		
		$query2 ="INSERT INTO tb_kbyt(user_sdt, user_trieuchung_ho, user_trieuchung_sot, user_trieuchung_dauhong, user_trieuchung_matmui, user_trieuchung_met, user_trieuchung_khotho, user_dichte_benh, user_dichte_tiepxuc, user_dichte_quocgiapassing, user_dichte_dieutri, user_trieuchung_textarea) 
		VALUES ('$user_sdt','$user_trieuchung_ho','$user_trieuchung_sot','$user_trieuchung_dauhong','$user_trieuchung_matmui','$user_trieuchung_met','$user_trieuchung_khotho','$user_dichte_benh','$user_dichte_tiepxuc','$user_dichte_quocgiapassing','$user_dichte_dieutri','$user_trieuchung_textarea')";
		$insert1 = mysqli_query($conn,$query1);
		$insert2 = mysqli_query($conn,$query2);
		if(!$insert1 or !$insert2){
			echo"<script>alert('Lỗi truy vấn')</script>";
			echo"Lỗi :".mysqli_error($conn);
		}
		else{
			
			echo "<script>alert('Khai Báo Thành Công')</script>";
		}
	
	
	}

}
KhaiBaoYTe();












 ?>