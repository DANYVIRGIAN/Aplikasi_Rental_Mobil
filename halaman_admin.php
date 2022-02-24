<h1>KARYAWAN ONLY</h1>
<?php include "header.php" ?>
<?php include "readadmin.php" ?>
<?php
    if ($_SESSION["login"]=="")
    {
        header("Location:login.php");
    }
?>
