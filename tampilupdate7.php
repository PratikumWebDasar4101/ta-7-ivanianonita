<?php
require_once("db7.php");

$nim=$_GET['nim']; 
$mahasiswabaru =mysqli_query($conn, "SELECT * from mahasiswabaru where nim='$nim'");
$row=mysqli_fetch_array($mahasiswabaru);
$fakultas=array('FIT','FIF','FRI','FIK','FEB','FKB','FTE');

$query=mysqli_query($conn,"SELECT * FROM mahasiswabaru where nim='$nim'");
$row=mysqli_fetch_array($query);

function active_radio_button($value,$input){
    $result = $value == $input?'checked':'';
    return $result;
}
?>
<html>
<head>
    <title></title>
</head>
<body>
    <input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
    <table>
    <form action="ubah7.php" method="POST">

        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><input type="number" value="<?php echo $row['nim']; ?>" name="nim"></td>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jeniskelamin"<?php if($row['jeniskelamin']=="laki-laki"){ ?> checked <?php } ?> value="laki-laki">laki-laki
                <input type="radio" name="jeniskelamin"<?php if($row['jeniskelamin']=="perempuan"){ ?> checked <?php } ?> value="perempuan">perempuan</td>
            
            
        </tr>

        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><select name="prodi">
                <option value="MI" <?php if($row['prodi']=="MI"){ ?> selected="selected" <?php } ?>>MI</option>
                <option value="IF" <?php if($row['prodi']=="IF"){ ?> selected="selected" <?php } ?>>IF</option>
                <option value="TK" <?php if($row['prodi']=="TK"){ ?> selected="selected" <?php } ?>>TK</option>
                <option value="SM" <?php if($row['prodi']=="SM"){ ?> selected="selected" <?php } ?>>SM</option>
                <option value="KA" <?php if($row['prodi']=="KA"){ ?> selected="selected" <?php } ?>>KA</option>
                <option value="TT" <?php if($row['prodi']=="TT"){ ?> selected="selected" <?php } ?>>TT</option>
                <option value="MP" <?php if($row['prodi']=="MP"){ ?> selected="selected" <?php } ?>>MP</option>
            </select>
        </td>
        </tr>

        <tr>
            <td>Fakultas</td>
            <td>:</td>
            <td><select name="fakultas"><br>
                <option value="FIT" <?php if($row['fakultas']=="FIT"){ ?> selected="selected" <?php } ?>>FIT</option>
                <option value="FIF" <?php if($row['fakultas']=="FIF"){ ?> selected="selected" <?php } ?>>FIF</option>
                <option value="FRI" <?php if($row['fakultas']=="FRI"){ ?> selected="selected" <?php } ?>>FRI</option>
                <option value="FIK" <?php if($row['fakultas']=="FIK"){ ?> selected="selected" <?php } ?>>FIK</option>
                <option value="FEB" <?php if($row['fakultas']=="FEB"){ ?> selected="selected" <?php } ?>>FEB</option>
                <option value="FKB" <?php if($row['fakultas']=="FKB"){ ?> selected="selected" <?php } ?>>FKB</option>
                <option value="FTE" <?php if($row['fakultas']=="FTE"){ ?> selected="selected" <?php } ?>>FTE</option>
             </select></td>
           
        </tr>

        <tr>
            <td>Asal</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $row['asal']; ?>" name="asal"></td>
        </tr>

        <tr>
            <td>Moto Hidup</td>
            <td>:</td>
            <td><input type="textarea" value="<?php echo $row['motohidup']; ?>" name="motohidup"></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="Simpan"></td>
        </tr>
    </form>
</table>

</body>
</html>
