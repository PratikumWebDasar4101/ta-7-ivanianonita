<?php
session_start();
require_once("db7.php");
?>
<table border=1>
	<head>
		<form action="caridata.php" method="POST">
		<input type="text" name="nim" placeholder="Cari Nim Mahasiswa">
		<input type="submit" name="cari" value="cari">&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='formsiswa.html'><b>Input Data</b></a><br>
		<th>Nim</th>
		<th>Nama</th>
		<th>Action</th>
	</head>
	<tbody>
<?php
$sql = "SELECT * FROM mahasiswabaru";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	//output data of each row
	while($row=mysqli_fetch_assoc($result)){
		$nim=$row['nim'];
		echo"<tr>";
		echo"<td>".$row["nim"]."</td>";
		echo"<td>".$row["nama"]."</td>";
		echo"<td>"."<a href='delete7.php?nim=$nim'>Delete</a>|<a href='detail.php?nim=$nim'>Detail</a>"."</td>";
		echo"</tr>";
	}
}else{
	echo "0 results";
}
mysqli_close($conn);
?>
</tbody>
</table>