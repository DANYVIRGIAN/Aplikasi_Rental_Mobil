<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ukl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO rent_mobil(id_mobil, nomor_mobil, merk, jenis, warna, tahun_pembuatan, biaya_sewa_per_hari, stok_mobil)
VALUES (".$_POST["txt_id_mobil"].",
'".$_POST["txt_nomor_mobil"]."',
'".$_POST["txt_merk"]."',
'".$_POST["txt_jenis"]."',
'".$_POST["txt_warna"]."',
'".$_POST["txt_tahun_pembuatan"]."',
'".$_POST["txt_biaya_sewa_per_hari"]."',
'".$_POST["txt_stok_mobil"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<a href='header.php'>
    <-kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>