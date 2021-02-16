
	<?php include'header.php'; ?>
	 <title>Video Mr.Iwan Hulu</title>
	<section id="about" class="about">
			<div class="container">
				<div class="row">
					<center><H1>VIDEO </H1></center>
					<div class="about-content">
						<?php
            				$qry = mysqli_query($konek,"SELECT * FROM tbl_bulan limit 200");
                			while ($data=mysqli_fetch_assoc($qry)) {
                		?>

						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="image">
								<img src="img/2.jpg" alt="#">
								<a href="<?php echo $data['uraian']; ?>" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	<?php include'footer.php'; ?>