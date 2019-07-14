<?php 
include "connect.php";
$nama=$_POST['NAMA'];
$plat=$_POST['PLAT'];
$merek=$_POST['MERK'];


	$q="INSERT INTO pelanggan VALUES(null,$nama,$plat,$merek)";
$sql=mysqli_query($konek,$q);




 ?>