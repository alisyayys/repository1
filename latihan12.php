<h2>a. Form REGISTRASI</h2>
<form method="post">
    Nama : <input type="text" name="nama" required><br><br>
    Username / Email : <input type="text" name="username" required><br><br>
    Password : <input type="password" name="password" required><br><br>
    Konfirmasi Password : <input type="password" name="konfirmasi" required><br><br>
    <input type="submit" name="daftar" value="DAFTAR">
    <input type="reset" value="BATAL">
</form>
<?php
if (isset($_POST['daftar'])) {
    if ($_POST['password'] == $_POST['konfirmasi']) {
        echo "Registrasi Berhasil! Halo, " . $_POST['nama'];
    } else {
        echo "Password tidak sama!";
    }
}
?>

<hr>

<h2>b. Form LOGIN</h2>
<form method="post">
    Username / Email : <input type="text" name="user_login" required><br><br>
    Password : <input type="password" name="pass_login" required><br><br>
    <input type="submit" name="login" value="LOGIN">
    <input type="reset" value="BATAL">
</form>
<?php
if (isset($_POST['login'])) {
    echo "Login Berhasil! Selamat datang, " . $_POST['user_login'];
}
?>