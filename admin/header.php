<?php include'../koneksi.php'; 
include'valid.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN</title>
    <meta name="description" content="https://layanancoding.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/icon.png">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="img/progremmer.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">ADMIN</h2><span>WEB SITE</span>
          </div>
          <div class="sidenav-header-logo"><a href="master.php" class="brand-small text-center"> <strong>L</strong><strong class="text-primary">C</strong></a></div>
        </div>
        <div class="main-menu">
          <h5 class="sidenav-heading">Panel Navigasi</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="master.php"> <i class="icon-home"></i>BERANDA                           </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Data Master</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="video_add.php">File Video</a></li>
                 <li><a href="layanan_add.php">File Layanan</a></li>
                  <li><a href="user_add.php">File User</a></li>
                   <li><a href="skil_add.php">File Skil / Ketrampilan</a></li>
                    <?php
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_profil where kode = '1' limit 1");
                        while ($data=mysqli_fetch_array($qry)) {
                     ?>
                     <li><a href="profil_setting.php?id=<?php echo base64_encode($data['kode']); ?>">File Profil</a></li>

                   <?php } ?>

                       <li><a href="folio_add.php">File Galeri</a></li>

              </ul>
        </div>

        <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="blog_add.php"> <i class="icon-screen"> </i>Input Artikel</a></li>
             <li> <a href="blog_tampil.php"> <i class="icon-screen"> </i>Daftar Artikel</a></li>
             <li> <a href="project_add.php"> <i class="icon-screen"> </i>Materi Mahasiswa</a></li>
             <li> <a href="project_tampil.php"> <i class="icon-screen"> </i>Daftar Materi</a></li>
          </ul>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="master.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary">Mr.Iwan Hulu</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-home"></i><span class="badge badge-info">Tools</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    
                       <li><a rel="nofollow" href="master.php" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/setting.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Refresh</h3><span></span><small>Normalkan Sistem</small>
                        </div></a></li>
                        <li><a rel="nofollow" href="keluar.php" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/keluar.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Keluar</h3><span></span><small>SESSION</small>
                        </div></a></li>
                         <li><a rel="nofollow" class="dropdown-item d-flex" data-toggle="modal" data-target="#myModal"> 
                        <div class="msg-profile"> <img src="img/user.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Listing Web</h3><span></span><small>Profil Programmer</small>
                        </div></a></li>



                        <li><a rel="nofollow" target="_blank" href="../index.php" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/website.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Lihat Web Site</h3><span></span><small>Halaman Pengguna</small>
                        </div></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Devoloper</h4>
      </div>
      <div class="modal-body">
          <H3>Nama : Delisman Hulu</H3>
          <H3>Web Site : <a href="https://layanancoding.com">Layanan Coding</a></H3>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>