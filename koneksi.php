<?php
$server= 'localhost'; 
$user= 'root';
$password= ''; 
$database= 'profil_pribadi';
$konek= mysqli_connect($server,$user,$password,$database);
if ($konek){
		echo "";
	}else
		{							
		echo "GAGAL KONEK KE DATABASE";
}
?>
