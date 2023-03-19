<?php
$servername = "localhost";
$database = "codeigniter";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
echo "Connected successfully";

$name = $_POST['txtname'];
$tempat = $_POST['tempat_ttl'];
$tanggal = $_POST['tanggal_ttl'];
$agama = $_POST['txtagama'];
$alamat = $_POST['txtalamat'];
$nohp = $_POST['phone'];
$jk = $_POST['radiocheck'];
// $hobi = $_POST['hobischeck'];
$hobi = implode(',', $_POST['hobischeck']);


$sql = "INSERT INTO `mahasiswa_forms` (`email`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `no_hp`, `jenis_kel`, `hobi`, `foto`) VALUES ('$name', '$tempat', '$tanggal', '$agama', '$alamat', '$nohp', '$jk', '" . $hobi . "', 'null')";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "Contact Records Inserted";
}
header("Location:http://localhost/submission-2/");
