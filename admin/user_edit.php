<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_user WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit User</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama Pengguna</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" value="<?php echo $data['nama'] ?>" class="form-control is-valid" placeholder="Input">
                      </div>
                </div>


                 <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">User Name </label>
                      <div class="col-sm-10">
                        <input type="text" name="txtuser" value="<?php echo $data['user_name'] ?>" class="form-control is-valid" placeholder="Input">
                      </div>
                </div>


                 <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="Password" name="txtpassword" value="<?php echo $data['password'] ?>" class="form-control is-valid" placeholder="Input">
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
                                  $txtnama=$_POST['txtnama'];
                                  $txtuser=$_POST['txtuser'];
                                $txtpassword=$_POST['txtpassword'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_user SET nama='$txtnama',password='$txtpassword',user_name='$txtuser' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                      alert('Data Berhasil di Edit');
                      document.location.href="user_add.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan Gagal";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>