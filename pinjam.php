<h1>HALAMAN SEWA</h1>
<?php include "header.php" ?>
<br/><br/>
<form action="minjammobil.php"
method="POST">
    id_sewa<input type="text"
    name="txt_id">
    <br/>
    id_mobil<input type="text"
    name="txt_id_mobil">
    <br />
    id_karyawan<input type="text"
    name="txt_id_karyawan">
    <br/>
    id_pelanggan<input type="text"
    name="txt_id_pelanggan">
    <br/>
    tgl_sewa<input type="date"
    name="txt_tgl_sewa">
    <br/>
    tgl_kembali<input type="date"
    name="txt_tgl_kembali">
    <br/>
    <input type="submit" value="pinjam">
</form>
