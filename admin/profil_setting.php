<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_profil WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Profil</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">

              <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">About Me</label>
                      <div class="col-sm-12">
                       <textarea class="form-control" id="visi" placeholder="Konten" name="txtvisi" required><?php echo $data['visi_misi'];?></textarea>
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Deskripsi Skil</label>
                      <div class="col-sm-12">
                       <textarea class="form-control" id="alamat" placeholder="Konten" name="txtsejarah" required><?php echo $data['sejarah'];?></textarea>
                      </div>
                  </div>

                   <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Deskrispi Pendidikan dan Pekerjaan</label>
                      <div class="col-sm-12">
                       <textarea class="form-control" id="sejarah" placeholder="Konten" name="txtjadwal" required><?php echo $data['jadwal'];?></textarea>
                      </div>
                  </div>
                   

                <input type="submit" name="btnedit" class="btn btn-primary" value="Update Profil">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtjadwal=$_POST['txtjadwal'];
                                  $txtvisi=$_POST['txtvisi'];
                                $txtsejarah=$_POST['txtsejarah'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_profil SET sejarah='$txtsejarah',visi_misi='$txtvisi',jadwal='$txtjadwal' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                      alert('Profil Berhasil di Update');
                      document.location.href="master.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan Gagal";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>