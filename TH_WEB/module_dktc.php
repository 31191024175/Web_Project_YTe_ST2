<?php 
require_once 'C:\xampp\htdocs\TH_WEB\config.php';

// // function connect($link){
// //     $link=mysqli_connect(HOST,USER,PASSWORD,DB);
// //     if(mysqli_connect_erro()){
// //         echo "Lỗi kết nối đến máy chủ".mysqli_connect_error();
// //         exit();
// //     }
// // }

function DangKyTiemChung(){
	if(isset($_GET['save_dktc'])){

		// echo"<script>alert('Thành Công')</script>";
		$conn= mysqli_connect(HOST,USER,PASSWORD,DB);
		$user_hoten = $_GET['hoten_dktc'] ;
		$user_ngaysinh = $_GET['ngaysinh_dktc'] ?? '';
		$user_gioitinh = $_GET['gender_dktc'] ?? '';
		$user_sdt = $_GET['sdt_dktc'] ?? '';
		$user_email=$_GET['email_dktc'] ?? '';
		$user_cccd=$_GET['cccd_dktc'] ?? '';
		$user_dantoc=$_GET['dantoc_dktc'] ?? '';
		$user_quoctich=$_GET['quoctich_dktc'] ?? '';
		$user_sonha=$_GET['diachi_dktc'] ?? '';
		$user_tinh=$_GET['city_dktc'] ?? '';
		$user_quanhuyen=$_GET['quanhuyen_dktc'] ?? '';
		$user_xaphuong=$_GET['xaphuong_dktc'] ?? '';
	
		$user_tiensu_phanve = $_GET['tiensu_phanve'];
		$user_tiensu_covid  = $_GET['tiensu_covid'] ;
		$user_tiensu_vacxin  = $_GET['tiensu_vacxin'] ;
		$user_tiensu_suygiam  = $_GET['tiensu_suygiam'];
		$user_tiensu_dungthuoc  = $_GET['tiensu_dungthuoc'];
		$user_tiensu_captinh  = $_GET['tiensu_captinh'] ;
		$user_tiensu_mantinh  = $_GET['tiensu_mantinh'] ;
	
	
		$user_muitiem = $_GET['muitiem_dktc'] ?? '';
		$user_ngaytiem=$_GET['ngaytiem_dktc'] ?? '';
		$user_buoitiem=$_GET['buoitiem_dktc'] ?? '';
		$user_dongy = $_GET['dongy_dktc'] ?? '';
	
		$query1 = "INSERT INTO tb_user(user_hoten, user_ngaysinh, user_gioitinh, user_email,user_sdt_, user_cccd, user_quoctich, user_dantoc, user_sonha, user_tinh, user_quanhuyen, user_xaphuong) 
		VALUES ('$user_hoten','$user_ngaysinh','$user_gioitinh','$user_email','$user_sdt','$user_cccd','$user_quoctich','$user_dantoc','$user_sonha','$user_tinh','$user_quanhuyen','$user_xaphuong')";
		
		$query2 ="INSERT INTO tb_dktc(user_tiensu_phanve,user_tiensu_covid,user_tiensu_vacxin,user_tiensu_suygiam,user_tiensu_dungthuoc,user_tiensu_captinh,user_tiensu_mantinh,user_sdt,user_muitiem, user_ngaytiem, user_buoitiem, user_dongy) VALUES ('$user_tiensu_phanve','$user_tiensu_covid','$user_tiensu_vacxin','$user_tiensu_suygiam','$user_tiensu_dungthuoc','$user_tiensu_captinh','$user_tiensu_mantinh','$user_sdt','$user_muitiem','$user_ngaytiem','$user_buoitiem','$user_dongy')";
		$insert1 = mysqli_query($conn,$query1);
		$insert2 = mysqli_query($conn,$query2);
		if(!$insert1 or !$insert2){
			echo"<script>alert('Lỗi truy vấn')</script>";
			echo"Lỗi :".mysqli_error($conn);
			
		}
		else{
		
		
			echo "<script>
			$('form').on('submit', function (e) {
				var dataString = $(this).serialize();
				 
				$.ajax({
				  type: 'POST',
				  url: 'DangKyTiemChung/index.php',
				  data: dataString,
				  success: function () {
					Next1.addEventListener('click', () => {
						body0.style.display ='none';
						form3.style.display = 'block';
						
						// form3.style.visibility ='visible';
						// form3.style.position = 'absolute';
						// form3.style.top = '150px';
						form3.scrollIntoView(true);
						
						
						progress.style.width = '900px';
					  });
				  }
				});
			 
				e.preventDefault();
			});
			
			
			</script>";
		}
	
	}
}
DangKyTiemChung();

    











 ?>
 <!-- <html>
	 <body>
		 <script>
			 alert('Thành công')
		 </script>
	 </body>
 </html> -->

 <!-- </script>";
		echo "<script>
		Next1.addEventListener('click', () => {
			body0.style.display ='none';
			form3.style.display = 'block';
			
			// form3.style.visibility ='visible';
			// form3.style.position = 'absolute';
			// form3.style.top = '150px';
			form3.scrollIntoView(true);
			
			
			progress.style.width = '900px';
		  });
		
		</script>"; -->