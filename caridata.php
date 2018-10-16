<?php
$db = new mysqli("localhost","root","","jurnal 7");
$nim= $_POST['nim'];
$sql= "SELECT * FROM mahasiswabaru where nim like '%$nim'";
$result= mysqli_query($db,$sql);
$row = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hasil Pencarian Data</title>
</head>
<body>
	<table border="1">
		<thead>
			<th>Nim</th>
			<th>Nama</th>
			<th>Action</th>
	</thead>
	<tbody>
<?php
if($row>0){
	while($row=mysqli_fetch_assoc($result)){
		$nim= $row['nim'];
		echo"<tr>";
		echo"<td>".$row['nim']."</td>";
		echo"<td>".$row['nama']."</td>";
		echo"<td>"."<a href='delete7.php?nim=$nim'>Delete</a>|<a href='detail.php?nim=$nim'>Detail</a>"."</td>";
		echo"</tr>";
		

	}
}else{
	echo "0 result";
}
?>
		
	</tbody>
</table>
<br>
<a href ="formsiswa.html">Inputkan Lagi</a>

</body>
</html>