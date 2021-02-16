<?php 
include'header.php'; ?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active"> Project Add</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Kategori</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtkategori" class="form-control is-valid" placeholder="Kategori Materi">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Materi</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtjudul" class="form-control is-valid" placeholder="Judul Materi">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">DESKRIPSI</label>
                      <div class="col-sm-10">
                        <textarea class="ckeditor" id="ckedtor" name="txtkonten"></textarea>
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Tgl Upload</label>
                      <div class="col-sm-10">
                        <input type="date" name="txttanggal" class="form-control is-valid">
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Sumber Materi</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtuser" class="form-control is-valid" placeholder="Sumber Materi ">
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Status</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtstatus" class="form-control is-valid" placeholder="Status Materi">
                      </div>
                  </div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Gambar</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" placeholder="Gambar">
                      </div>
                  </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="POSTING MATERI">
                </div>
              </div>
          </div>
      </section> 
      </form>
                        <?php
                                if (isset($_POST["btnsimpan"])){
                                  $txtkategori =$_POST['txtkategori'];
                                  $txtjudul=$_POST['txtjudul'];
                                  $txtkonten=$_POST['txtkonten'];
                                  $txttanggal=$_POST['txttanggal'];
                                  $txtuser=$_POST['txtuser'];
                                  $txtstatus=$_POST['txtstatus'];
                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_file (kategori,judul,konten,tgl_posting,user,status,data_file) VALUES ('$txtkategori','$txtjudul','$txtkonten','$txttanggal','$txtuser','$txtstatus','$nama_file')");
                         if(!empty($lokasi_file)){
                          move_uploaded_file($lokasi_file, "../img/materi/$nama_file");
                          echo "Data Berhasil di simpan";
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="project_tampil.php";
                            </script>
                          <?php
                          }
                        }
                      ?>



 


<?php include'footer.php'; ?>