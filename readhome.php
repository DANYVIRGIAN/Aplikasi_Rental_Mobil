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

echo"<br/>";
$sql = "SELECT * FROM rent_mobil";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<table border = "2">
    <tr>
    <td>
    <p>id</p>
    </td>
    <td>
    <p>nomor</p>
    </td>
    <td>
    <p>merk</p>
    </td>
    <td>
    <p>jenis</p>
    </td>
    <td>
    <p>warna</p>
    </td>
    <td>
    <p>tahun pembuatan</p>
    </td>
    <td>
    <p>stok mobil</p>
    </td>
    </tr>

<?php
    while($row = $result->fetch_assoc()) {
           
         ?>
         <br>
         <tr>
         <td>
         <?php echo $row["id_mobil"];?>
         </p></td>
         
         <td>
         <?php echo $row["nomor_mobil"];?>
         </p></td>
        
         
         <td>
         <?php echo $row["merk"];?>
         </p></td>
        
         
         <td>
         <?php echo $row["jenis"];?>
         </p></td> 
        
         
         <td>
         <?php echo $row["warna"];?>
         </p></td>
        
         
         <td>
         <?php echo $row["tahun_pembuatan"];?>
         </p></td>
        
         
         <td>
         <?php echo $row["stok_mobil"];?>
         </p></td></tr>
         <?php
}
?>
</table>   
</body>
</html> 
<?php
} 
else {
    echo "0 results";
}
$conn->close();
?>