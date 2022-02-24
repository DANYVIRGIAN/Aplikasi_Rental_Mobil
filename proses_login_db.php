<?php
    session_start();
    $conn = new mysqli("localhost","root","", "ukl");
    $sql = "SELECT username FROM login
        WHERE username = '".$_POST['txt_user']."'
         and
         password = '".$_POST['txt_pass']."'";
    echo $sql."<br />";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count > 0) {
        echo "betul bos";
        $_SESSION["login"]="login";
        header("Location: halaman_admin.php");
    }else {
        echo "username atau password salah";
    }
    

    ?>