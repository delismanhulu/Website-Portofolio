<?php 
include'../koneksi.php';
 if(isset($_POST["btnlogin"])){
 $txtusername =$_POST['txtusername'];
 $txtpassword = md5($_POST['txtpassword']);
 
 $cek = mysqli_query($konek, "SELECT * FROM tbl_user where user_name='".$_POST['txtusername']."' AND password='".md5($_POST['txtpassword'])."'");
        $hasil = mysqli_fetch_array($cek);
        $count = mysqli_num_rows($cek);

        $nama1 =$hasil['kode'];
    if($count >0){
        session_start();
        $_SESSION['kode']=$nama1;
        header("location:master.php");
             }
    else{
     // echo "";
    }
  }
?>
<div class="pages_agile_info_w3l page_error">
                               <div class="over_lay_agile_pages_w3ls error">
                                  <div class="registration error">
                                                     <br><br><br>
                                                     <h1 align="center">Oops! Login Salah </h1>
                                                        <br><br><br><br><br><br><br><br><br>
                                                     <h1 align="center"><a href="index.php">Coba Lagi</a><h1>
                                                </div>
                                           
                                            
                            </div>
                        </div>