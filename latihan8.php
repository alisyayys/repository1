<?php
echo "<h2>8. Form Pendaftaran</h2>";

if (isset($_POST['daftar'])) {
    $nama_daftar  = trim($_POST['nama_daftar'] ?? '');
    $kelas_daftar = trim($_POST['kelas_daftar'] ?? '');

    if (empty($nama_daftar) || empty($kelas_daftar)) {
        echo "<p style='color:red;'>Error: Nama dan Kelas wajib diisi!</p>";
    } else {
        echo "Selamat datang, $nama_daftar dari kelas $kelas_daftar";
    }
}
?>
<form method="POST">
    Nama : <input type="text" name="nama_daftar"><br><br>
    Kelas : <input type="text" name="kelas_daftar"><br><br>
    <button type="submit" name="daftar">Daftar</button>
</form>
<hr>

<?php