<?php include'header.php'; ?>
		<section id="blog" class="blog section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-4 col-xs-12">
						<div class="section-title">
							<h2>LIST<span>ARTIKEL</span></h2>
						</div>
					</div>
				</div>
				<div class="row">

					  <?php
                			 $qry = mysqli_query($konek,"SELECT * FROM tbl_blog");
                				while ($data=mysqli_fetch_assoc($qry)) {
                		?>

					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<!-- single-news -->
						<div class="single-news">
							<div class="news-head">
								<div class="news-date">
									<span>NEW</span>
									<span>ARTIKEL</span>
									<span><?php echo $data['tgl_posting']; ?></span> 
								</div>
								<img src="img/blog/<?php echo $data['gambar']; ?>" alt="artikel_detail.php?id=<?php echo base64_encode($data['kode']); ?>">
								<div class="news-view"> 
									<span><i class="fa fa-mobile"></i><?php echo $data['kategori']; ?></span>
									<span><i class="fa fa-eye"></i>10.000 Views</span>
								</div>
							</div>
							<div class="news-body">
								<h2><a href="artikel_detail.php?id=<?php echo base64_encode($data['kode']); ?>"><?php echo $data['judul']; ?></a></h2>
								
								<a href="artikel_detail.php?id=<?php echo base64_encode($data['kode']); ?>" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				<?php } ?>

				</div>
			</div>
		</section>
	<?php include'footer.php'; ?>