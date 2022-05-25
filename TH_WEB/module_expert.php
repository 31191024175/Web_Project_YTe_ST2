<?php 
require_once 'C:\xampp\htdocs\TH_WEB\config.php';

function Card(){
	$conn = mysqli_connect(HOST, USER, PASSWORD, DB);
	$query = "SELECT * FROM tb_chuyengia";
	$dataset = mysqli_query($conn, $query);
	while($Expert = mysqli_fetch_assoc($dataset))

	echo "
	<div class='card'>
                    <img src='".$Expert['chuyengia_hinh']."' alt=''>
                    <h3>".$Expert['chuyengia_hoten']."</h3>
                    <span>".$Expert['chuyengia_chucvu']."</span>
                    <div class='share'>
                        <a href='#' class='fab fa-facebook-f'></a>
                        <a href='#' class='fab fa-twitter'></a>
                        <a href='#' class='fab fa-instagram'></a>
                        <a href='#' class='fab fa-linkedin'></a>
                    </div>
                </div>
   ";
	
}

function TinTuc(){
	$conn = mysqli_connect(HOST, USER, PASSWORD, DB);
	$query = "SELECT * FROM tb_tintuc";
	$dataset = mysqli_query($conn, $query);
	while($News = mysqli_fetch_assoc($dataset))

	echo "
	<div class='card p-3 m-2'>
                    <div class='image'>
                        <img src='".$News['tintuc_hinhanh']."' class='w-100 h-100' alt=''>
                    </div>
                    <div class='content p-2'>
                        <h3>".$News['tintuc_tieude']."</h3>
                        <a href='#' class='link-btn'>Đọc thêm</a>
                        <div class='icons'>
                            <a href='#'><i class='fas fa-user'></i>".$News['tintuc_tacgia']."</a>
                            <a href='#'><i class='fas fa-calendar'></i>".$News['tintuc_ngay']."</a>
                        </div>
                    </div>
                </div>
	";

}



?>
