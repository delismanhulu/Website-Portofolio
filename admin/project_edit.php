<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_file WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit  Project</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">KATEGORI</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtkategori" value="<?php echo $data['kategori'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">JUDUL PROJECT</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtjudul" value="<?php echo $data['judul'] ?>" class="form-control is-valid" placeholder="JUDUL NEWS / ARTIKEL">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">DESKRIPSI</label>
                      <div class="col-sm-10">
                       <textarea class="form-control" id="alamat" placeholder="Konten" name="txtkonten" required><?php echo $data['konten'];?></textarea>
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">TANGGAL POSTING</label>
                      <div class="col-sm-10">
                        <input type="date" name="txttanggal" value="<?php echo $data['tgl_posting'] ?>" class="form-control is-valid">
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">PROGRAMMER</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtuser" value="<?php echo $data['user'] ?>" class="form-control is-valid" placeholder="Nama Posting ">
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">STATUS</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtstatus" value="<?php echo $data['status'] ?>" class="form-control is-valid" placeholder="Status Berita">
                      </div>
                  </div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">PROJECT FILE</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" value="<?php echo $data['gambar'] ?>" placeholder="Status Berita">
                      </div>
                  </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE MATERI">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtkategori =$_POST['txtkategori'];
                                  $txtjudul=$_POST['txtjudul'];
                                  $txtkonten=$_POST['txtkonten'];
                                  $txttanggal=$_POST['txttanggal'];
                                  $txtuser=$_POST['txtuser'];
                                  $txtstatus=$_POST['txtstatus'];

                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_file SET kategori='$txtkategori',judul='$txtjudul',konten='$txtkonten',tgl_posting='$txttanggal',user='$txtuser',status='$txtstatus',data_file='$nama_file' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "../img/materi/$nama_file");

                    ?>

                    <script type="text/javascript">
                      document.location.href="project_tampil.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>