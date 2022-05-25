<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
<body>
	<?php
	require_once"module.php";
	$link = null;
	taoKetnoi($link);
    $current_page = (isset($_GET['page'])?$_GET['page']:0);
	$dataset= chayTruyVanTraVeDl($link,"select * from tbl_sanpham limit ".($current_page*NUM_PROD_PER_PAGE).", ".NUM_PROD_PER_PAGE);

	while($row=mysqli_fetch_assoc($dataset))
	   echo "
      
	    <div class='product'>
		  <h1>".$row['ten']."</h1>
		  <img src=".$row['mota']." width='100' height='100'>
		  <span>".number_format($row['gia'])." VND</span>
	    </div>
	   ";
	?>
    <hr>
    <span>
    <?php
    $dataset = chayTruyVanTraVeDL($link,"select count(*) from tbl_sanpham");
    $data= mysqli_fetch_array($dataset);
    $num_prod=$data[0];
    $pages = ceil($num_prod/NUM_PROD_PER_PAGE);
    for ($i=0;$i<$pages;$i++)
    echo "<a href='?page=".$i."'> ".$i." </a>".($i>=$pages-1?"":" | ");
    giaiPhongBoNho($link,$dataset)
    ?>
    </span>
    <a href="detail.php?idsp=".$rows['id']."'></a>
</body>
</html>