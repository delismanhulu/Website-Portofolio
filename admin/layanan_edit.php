<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_jabatan WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Layanan</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Uraian Layanan</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtbulan" value="<?php echo $data['uraian'] ?>" class="form-control is-valid" placeholder="Input">
                      </div>
                </div>
                <input type="submit" name="btnedit" class="btn btn-primary" value="Ubah Data">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtbulan=$_POST['txtbulan'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_jabatan SET uraian='$txtbulan' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                      document.location.href="layanan_add.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan Gagal";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>