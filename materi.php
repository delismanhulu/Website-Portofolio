
<?php include'header.php';
error_reporting(0);
 ?>
 <title>Materi Mahasiswa Mr.Iwan</title>
<section id="contact" class="contact section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
								<form method="POST">
							          <input type="text" name="query" placeholder="Cari" class="form-control"/>
							          <input type="submit" name="cari" value="Cari" class="btn btn-primary">
							  </form>

			<table id="customers">
                <tr>
                  <th width="5%">No</th>
                  <th width="70%">Judul</th>
                  <th width="10%">Kategori</th>
                  <th width="10%">Tanggal</th>
                  <th>Action</th>
                </tr>
                <?php
                    $no = 1;
                        $query = $_POST['query'];
                        if ($query !=''){
                            $select = mysqli_query($konek, "select * from tbl_file where judul LIKE '%".$query."%' OR kategori LIKE '%".$query."%'");
                            
                        }else {
                           $select = mysqli_query($konek,"select * from tbl_file");
                           }
                        if(mysqli_num_rows($select)){
                            while ($data=mysqli_fetch_array($select)){
                 ?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['judul']; ?></td>
                  <td><?php echo $data['kategori']; ?></td>
                  <td><?php echo $data['tgl_posting']; ?></td>
                  <td>
                    <a href="materi_detail.php?id=<?php echo base64_encode($data['kode']); ?>">
                  	<button class="btn btn-primary">SELENGKAPNYA</button></a>
               		</td>
               </tr>

					    <?php }}else{
					        echo "Tidak di temukan";}
					    ?>
			</div>
</table>
</div>
</div>
</div>
</section>			

 

<?php include'footer.php'; ?>
