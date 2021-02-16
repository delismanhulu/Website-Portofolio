<?php 
include'header.php'; ?>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php"></a></li>
            <li class="breadcrumb-item active">Data Master <li class="breadcrumb-item active">Video</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Url Video Youtobe</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtbulan" class="form-control is-valid" placeholder="Input Data" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')"> </input>
                      </div>
                </div>
               <p align="right"> <input type="submit" name="btnsimpan" class="btn btn-primary" value="Simpan"> </p>
                </div>
              </div>
          </div>
      </section> 
      </form>            
        <?php
                  if (isset($_POST["btnsimpan"])){
                                $txtbulan=$_POST['txtbulan'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_bulan (uraian) VALUES ('$txtbulan')");
                                   if(!empty($simpan)){
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="video_add.php";
                            </script>
                          <?php
                          }
                        }
                      ?>

    <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">List Video</h3>
            </div>
            <div class="box-body no-padding">
          <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="10%">NO</th>
                  <th>Link Video</th>
                  <th width="5%" colspan="2">Action</th>
                </tr>
                <?php
                    $no =1;
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_bulan");
                        while ($data=mysqli_fetch_array($qry)) {
                  ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['uraian']; ?></td>
                  <td> <a href="video_edit.php?id=<?php echo base64_encode($data['kode']); ?>" class="fa fa-edit"></td>
                 <td> <a href="video_hapus.php?id=<?php echo $data['kode']; ?>" class="fa fa-times"></td>
                </tr>
                <?php } ?>

              </table>
</div>
            </div>
          </div>
          </div>

<?php include'footer.php'; ?>