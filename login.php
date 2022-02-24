<h1>LOGIN FORM</h1>
<?php include "header.php" ?>
<br/><br/>
<form action="proses_login_db.php"
method="POST">
    username<input type="text"
    name="txt_user">
    <br/>
    password<input type="password"
    name="txt_pass">
    <br />
    <input type="submit" value="login">
</form>
