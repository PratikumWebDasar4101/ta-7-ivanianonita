<?php
session_start();
require_once "db7.php";
$nim=$_SESSION['nim'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<table>
		<form>
			<tr>
				<?php
				echo "<td>"."<a href='tampilupdate7.php?nim=$nim'>Edit</a>";
				?>
				<td><a href="formsiswa.html">Input Data</a></td>
			</tr>

			<?php
			
			$sql="SELECT * FROM mahasiswabaru where nim='$nim'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);

			echo "<tr>";
			echo "<td>"."<br><br>"."INPUTAN DATA"."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td colspan=4>"."Nim : ".$row['nim']."<br><br>";
			echo "Nama : ".$row['nama']."<br><br>";
			echo "Jenis Kelamin : ".$row['jeniskelamin']."<br><br>";
			echo "Program Studi : ".$row['prodi']."<br><br>";
			echo "Fakultas : ".$row['fakultas']."<br><br>";
			echo "Asal : ".$row['asal']."<br><br>";
			echo "Moto Hidup : ".$row['motohidup']."</td>";
			echo "</tr>";

			mysqli_close($conn);

			?>
		</form>
	</table>
</body>
</html>