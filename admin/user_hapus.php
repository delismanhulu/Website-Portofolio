<?php include'../koneksi.php';
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_user where kode='".$_GET["id"]."'");
	$data  = mysqli_fetch_array($qry);
		header('location: user_add.php');

}

?>