<a href="home.php">home</a> |
<a href='pinjam.php'>rent a car</a> |
<?php
    session_start();
    //jika sudah login
    //ga perlu
    if ($_SESSION["login"]=="login")
    {
        //tulis log out
        echo "<a href='logout.php'>logout</a> |
        
        <a href='halaman_admin.php'>karyawan</a> |";
    }else{
        echo "<a href='login.php'>login</a> |";
    }
?>
