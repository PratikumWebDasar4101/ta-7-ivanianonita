<?php
require_once("db7.php");
$nim   = $_GET['nim'];
$query="DELETE from mahasiswabaru where nim ='$nim'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:tampil7.php");
?>