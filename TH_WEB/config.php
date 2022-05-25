<?php
define("DB","db_ttyt");
define ("HOST","127.0.0.1");
define("USER","WebYTe");
define("PASSWORD","WebYTe");


$conn= mysqli_connect(HOST,USER,PASSWORD,DB);
if(!$conn){
    echo "Kết nối không thành công";
}


?>