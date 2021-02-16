
<?php include'header.php' ?>
 <title>Samakalian Hulu : Web Pribadi</title>
		<section id="slider" class="slider" style="background-image:url('img/sama.gif')">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<div class="text">
							<h1>Welcome To Web Site</h1>
							<p>Samakalian Hulu, S.Pd.K., M.Th.</p>
							<div class="button">
								<a href="tentang.php" class="btn primary "><i class="fa fa-briefcase"></i>View Work</a>
								<a href="contact.php" class="btn"><i class="fa fa-phone"></i>Contact Me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="about" class="about">
			<div class="container">
				<div class="row">
					<div class="about-content">
						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="section-title">
								<h2>About <span>Me</span></h2>
							</div>
						</div>

						<?php
            				$qry = mysqli_query($konek,"SELECT * FROM tbl_profil limit 1");
                			while ($data=mysqli_fetch_assoc($qry)) {
                		?>
						<div class="col-md-6  col-sm-6 col-xs-12">
							<div class="single-about">
								<p class="bolt"><?php echo $data['visi_misi']; ?></p>
								<div class="cv">
									<a target="_blank"href="dokumen/Curiculum_Vitae.pdf">Download Profil</a>
								</div>
								<!-- <div class="social">
									<ul>
										<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div> -->
							</div>
						</div>
						<?php } ?>


						<?php
            				$qry = mysqli_query($konek,"SELECT * FROM tbl_bulan limit 1");
                			while ($data=mysqli_fetch_assoc($qry)) {
                		?>

						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="image">
								<img src="img/about.jpg" alt="#">
								<a href="<?php echo $data['uraian']; ?>" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
						</div>
					<?php } ?>

					</div>
				</div>
			</div>
		</section>
		<section id="skill" class="skill section">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<div class="section-title">
							<h2>My <span>Skill</span></h2>
						</div>
					</div>
					<div class="col-md-10 col-sm-12 col-xs-12">
						<div class="skill-head">
							<div class="row">

						<?php
            				$qry = mysqli_query($konek,"SELECT * FROM tbl_profil limit 1");
                			while ($data=mysqli_fetch_assoc($qry)) {
                		?>	
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="skill-content">
										<h3>DESKRIPSI SKILL</h3>
										<p>
											<?php echo $data['sejarah']; ?>
										</p>
									</div>
								</div>
						<?php } ?>

								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="skill-main">

								<?php
		            				$qry = mysqli_query($konek,"SELECT * FROM tbl_jadwal_solat limit 20");
		                			while ($data=mysqli_fetch_assoc($qry)) {
		                		?>
										<div class="single-skill">
											<div class="skill-title">
												<h4><?php echo $data['uraian']; ?></h4>
											</div>
											<div class="progress two">
												<div class="progress-bar" data-percent="<?php echo $data['jadwal']; ?>">
													<span><?php echo $data['jadwal']; ?>%</span>
												</div>
											</div>
										</div>
								<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="story" class="story section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>PE<span>NDIDIKAN</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="story-content">
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">2000</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h3>2000-2006</h3>
									<p>SD Negeri No. 074079 Lawa-Lawa Luo Idano Tae</p>
								</div>
							</div>
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">2004</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
									<h3>2004–2006</h3>
									<p>SMP Negeri 5 Gomo Lawa-Lawa Luo Idano Tae</p>
								</div>
							</div>
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">2007</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
									<h3>2007–2009</h3>
									<p>SMA Negeri 2 Gomo Lawa-Lawa Luo Idano Tae</p>
								</div>
							</div>
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2010</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
									<h3>2010–2015</h3>
									<p>S-1 Sekolah Tinggi Teologi Johanes Calvin Bali (STT-JC)</p>
								</div>
							</div>

							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2010</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
									<h3>2015–2017)</h3>
									<p>S-2 Sekolah Tinggi Teologi Johanes Calvin Bali (STT-JC)</p>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="story" class="story section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="section-title">
							<h2>PE<span>KERJAAN</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<div class="story-content">
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.4s">2016</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
									<h3>Januari 2016 s/d 2018</h3>
									<p> Mengajar Bidang Studi Pendidikan Agama Kristen dan Budi Pekerti di SMA Kalam Kudus Cabang Bali</p>
								</div>
							</div>
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s">2016</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
									<h3>Juni 2016 s/d Desember 2016</h3>
									<p>Mengajar Bidang Studi Teknologi Informasi dan Teknologi di SMA Kalam Kudus Bali</p>
									
								</div>
							</div>
							<!-- single-story -->
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">2016</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
									<h3>Juni 2016 sampai Sekarang</h3>
									<p>Kepala Bidang Kerohanian SMA Kalam Kudus Cabang Bali</p>
								</div>
							</div>
							<!-- single-story -->

							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2017</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
									<h3>Januari 2016 Sampai Sekarang</h3>
									<p>Menjadi Wali Kelas serta Membuat Laporan Administrasi</p>
								</div>
							</div>
							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2017</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
									<h3>Januari 2017 s/d Desember 2017</h3>
									<p>Menjadi Penyuluh Non PNS di Pembimas Kristen Kanwil Kemenag Propinsi Bali</p>
								</div>
							</div>



							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2018</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
									<h3>Juni 2018 Sampai Sekarang</h3>
									<p>Menjadi dosen tidak tetap di Sekolah Tinggi Teologi Johanes Calvin – Bali, dan mengampu mata kuliah ‘Teologi Perjanjian Baru</p>
								</div>
							</div>
							


							<div class="single-story">
								<span class="year wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="1s">2018</span>
								<div class="inner-content wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="1s">
									<h3>Juni 2018 Sampai Sekarang</h3>
									<p>Menjadi dosen tidak tetap di Sekolah Tinggi Teologi Pelita Hati – Bali, dan mengampu mata kuliah "Strategi Pembelajaran Pendidikan Agama Kristen"</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php include'footer.php' ?>