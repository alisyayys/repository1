<?php
$r = "";
if (isset($_POST['hitung'])) {
    $luas = $_POST['luas'];
    $r = sqrt($luas / 3.14);
}
?>
<h2>Hitung Jari-jari Lingkaran</h2>
<form method="post">
    Luas Lingkaran : <input type="number" step="any" name="luas" required>
    <input type="submit" name="hitung" value="HITUNG">
</form>
<?php if ($r != "") echo "<p>Jari-jari = " . round($r, 2) . "</p>"; ?>