<?php
require_once("db7.php");

$nim=$_POST['nim'];
$nama= $_POST['nama'];
$jeniskelamin= $_POST['jeniskelamin'];
$prodi= $_POST['prodi'];
$fakultas= $_POST['fakultas'];
$asal= $_POST['asal'];
$motohidup= $_POST['motohidup'];


$sql= " UPDATE mahasiswabaru SET nim='$nim', nama='$nama' ,jeniskelamin='$jeniskelamin',prodi='$prodi', fakultas='$fakultas', asal='$asal', motohidup='$motohidup' where nim='$nim'";
if(mysqli_query($conn, $sql)){
	header("Location:detail.php");
}else{
	echo "Error :".$sql."<br>". mysql_error($conn);
}
?>