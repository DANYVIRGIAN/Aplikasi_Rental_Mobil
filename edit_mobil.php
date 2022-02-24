<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <!--kembali ke customer-->
    <br/>
    <form action="update_mobil.php"
    method="POST">

        Id : <input type="text"
         name="txt_id_mobil" value="<?php
             echo $_GET["ids"];
            ?>" readonly><br/>

        nomor mobil: <input type="text"
         name="txt_nomor_mobil"><br/>

        merk : <input type="text"
         name="txt_merk"><br/>

        jenis : <input type="text"
         name="txt_jenis"><br/>

        warna : <input type="text"
         name="txt_warna"><br/>

        tahun pembuatan : <input type="text"
         name="txt_tahun_pembuatan"><br/>

        biaya sewa per hari : <input type="text"
         name="txt_biaya_sewa_per_hari"><br/>
         
        stok : <input type="text"
         name="txt_stok_mobil"><br/>
         <input type="submit" value="KIRIM">
    </form>
    
</body>
</html>