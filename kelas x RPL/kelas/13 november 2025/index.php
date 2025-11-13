<form action="" method="post"></form>
<input type="nisn" name="nisn" placeholder="nisn" required><br>
<input type="nama" name="nama" placeholder="nama anda" required> <br>
<input type="alamat" name="alamat" placeholder="alamat anda" required> <br>
<input type="telepon" name="telepon" placeholder="no telepon" required> <br>
<input type="submit" name="simpan" value="simpan"><br>

<?php
$host = 'localhost';
$db = 'dbsekolah';
$user = '';
$pass = '12345678';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi){
    die ('gagal terkoneksi ke database : ' . mysqli_connect_error());
 }
if (isset($_POST['simpan'])){
    $nisn = $_POST[ 'nisn'];
    $nama = $_POST[ 'nama'];
    $alamat = $_POST[ 'alamat'];
    $telepon = $_POST[ 'telepon'];
    
        echo "data berhasil disimpan";
    }else{
        echo "data gagal disimpan";
    }

// $sql ='insert into siswa (nisn, nama, alamat, telepon) values ( '$nisn', '$nama', '$alamat', '$telepon')';<input type="submit" value="simpan" name="simpan">
// $query = mysqli_query($koneksi, $sql);

$sql = 'SELECT * FROM siswa';
$query = mysqli_query($koneksi, $sql);

while ($siswa = mysqli_fetch_array($query)){
    echo $siswa['nisn'] . ' - ' . $siswa['nama'] . ' - ' . $siswa['alamat'] . ' - ' . $siswa['telepon'] . ' - ' . '<br>';

$host = 'localhost'; 
$db = 'dbsekolah';
$user = 'root';
$pass='12345678';
$koneksi = mysqli_connect($host, $user, $pass, $db);
}
?>