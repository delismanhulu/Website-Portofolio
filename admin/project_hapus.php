<?php include'../koneksi.php';
if (isset($_GET[id])){
	$qry=mysqli_query($konek,"delete from tbl_file where kode='".$_GET["id"]."'");
	$data  = mysqli_fetch_array($qry);

	$lokasi=$data['data_file'];
    $hapus_gambar="project/$lokasi";
    unlink($hapus_gambar);
		header('location: project_tampil.php');

}

?>