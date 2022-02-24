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

$sql = "UPDATE rent_mobil SET 
        nomor_mobil ='".$_POST["txt_nomor_mobil"]."',
        merk ='".$_POST["txt_merk"]."',
        jenis ='".$_POST["txt_jenis"]."',
        warna ='".$_POST["txt_warna"]."',
        tahun_pembuatan ='".$_POST["txt_tahun_pembuatan"]."',
        biaya_sewa_per_hari ='".$_POST["txt_biaya_sewa_per_hari"]."',
        stok_mobil ='".$_POST["txt_stok_mobil"]."'
        WHERE id_mobil ='".$_POST["txt_id_mobil"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated Successfully";
} else {
    echo "Error Updating Record: " . $conn->error;
}

$conn->close();
?>
