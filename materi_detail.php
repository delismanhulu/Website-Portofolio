<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_file WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<head>
	<title>
		<?php echo $data['judul']; ?>
	</title>
</head>
		<section id="blog" class="blog section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-4 col-xs-12">
						<div class="section-title">
							<h3><?php echo $data['judul']; ?></h3>
						</div>
					</div>
				</div>
				<div class="row">

					  

					<div class="col-md-12" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<!-- single-news -->
						<div class="single-news">
							<div class="news-head">
								<div class="news-date">
									
									<br><br>
									<span><?php echo $data['tgl_posting']; ?></span> 
								</div>
								<img width="50%" height="300px" src="img/materi/<?php echo $data['data_file']; ?>" alt="Gambar Gagal di Cari">
								<div class="news-view"> 
								<?php echo $data['user']; ?>
								</div>
							</div>
							<div class="news-body">
								<p><?php echo $data['konten']; ?></p>
							</div>
						</div>
					</div>
		

				</div>
			</div>
		</section>
	<?php include'footer.php'; ?>