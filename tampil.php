<?php 
include "connect.php";
if($_POST){

$nama=$_POST['NAMA'];
$plat=$_POST['PLAT'];
$merek=$_POST['MERK'];


$q="INSERT INTO pelanggan VALUES(null,'$nama','$plat','$merek')";
$sql=mysqli_query($konek,$q);



}

$tampil="SELECT No from pelanggan where NAMA='$nama' and PLAT='$plat' and MERK='$merek'";
$tampil1="SELECT NAMA from pelanggan where NAMA='$nama' and PLAT='$plat' and MERK='$merek'";
$sql2=mysqli_query($konek,$tampil);
$sql23=mysqli_query($konek,$tampil1);
 ?>


<center>
	<?php
	foreach ($sql23 as $data) {
		echo "$data[NAMA]";
	}
 ?>

	<p>
		No Antrian Anda <br>
	</p>

	<?php
	foreach ($sql2 as $data) {
		echo "$data[No]";
	}

 ?>
<a href="projekta.php" id="home">
            <p>HOME</p>
        </a>
</center>



