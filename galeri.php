 <title>Galeri Mr.Iwan </title>
	<?php include'header.php'; ?>
	
	<section id="latest-works" class="latest-works section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>My <span>GALERI</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="works-menu wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
							<ul>
								<li class="active" data-filter="*"><i class="fa fa-tasks"></i>All</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="isotop-active">
						 <?php
                			 $qry = mysqli_query($konek,"SELECT * FROM tbl_folio");
                				while ($data=mysqli_fetch_assoc($qry)) {
                			 ?>
						<div class="col-md-4 col-sm-4 col-xs-12 print identity">
							<div class="single-work">
								<img src="img/folio/<?php echo $data['gambar']; ?>" alt="#">
								<div class="works-hover">
									<h4><a href="img/folio/<?php echo $data['gambar']; ?>"><?php echo $data['nama']; ?> <br><br><br> <?php echo $data['alamat']; ?></a></h4>
									<div class="link"></div>
								</div>
							</div>
						</div>
					<?php } ?>

					</div>
				</div>
			</div>
		</section>
	<?php include'footer.php'; ?>