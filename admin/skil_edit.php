<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_jadwal_solat WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit SKILL</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Uraian</label>
                      <div class="col-sm-10">
                        <input type="text" name="txturaian" value="<?php echo $data['uraian'] ?>" class="form-control is-valid" placeholder="Input">
                      </div>
                </div>


                 <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Angka Progres Skill </label>
                      <div class="col-sm-10">
                        <input type="text" name="txtjdawal" value="<?php echo $data['jadwal'] ?>" class="form-control is-valid" placeholder="0-100">
                      </div>
                </div>
             <p align="right">   <input type="submit" name="btnedit" class="btn btn-primary" value="Ubah Data"> </p>
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txturaian=$_POST['txturaian'];
                                  $txtjdawal=$_POST['txtjdawal'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_jadwal_solat SET uraian='$txturaian',jadwal='$txtjdawal' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                      alert('Data Berhasil di Edit');
                      document.location.href="skil_add.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan Gagal";
                  }
                }
              }
              ?>
    <?php include'footer.php'; ?>