<?php
include'../koneksi.php';
session_start(0);
	if (empty($_SESSION['kode'])){
		// header("location:index.php");
		die("ANDA BELUM LOGIN, HARAP LOGIN DULU <a href=\"javascript:history.back()\">Kembali</a>");
	}else{	
		// echo "LOGIN BERHASIL";
?>
<?php } ?>
