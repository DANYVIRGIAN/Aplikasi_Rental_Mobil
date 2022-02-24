<?php
$conn = new mysqli("localhost", "root", "", "ukl");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO rent_sewa (id_sewa, id_mobil, id_karyawan, id_pelanggan, tgl_sewa, tgl_kembali)
VALUES (".$_POST["txt_id_sewa"].", 
'".$_POST["txt_id_mobil"]."', 
'".$_POST["txt_id_karyawan"]."',
'".$_POST["txt_id_pelanggan"]."',
'".$_POST["txt_tgl_sewa"]."',
'".$_POST["txt_tgl_kembali"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE rent_mobil SET stok_mobil = stok_mobil-1 WHERE id_mobil = ".$_POST["txt_id_mobil"]."";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>