<?php
echo "<h2>9. Kalkulator Form (Switch)</h2>";

if (isset($_POST['hitung'])) {
    $x  = $_POST['x'];
    $y  = $_POST['y'];
    $op = $_POST['op'];

    switch ($op) {
        case '+':
            $hasil = $x + $y;
            break;
        case '-':
            $hasil = $x - $y;
            break;
        case '*':
            $hasil = $x * $y;
            break;
        case '/':
            if ($y == 0) {
                $hasil = "Error: Tidak bisa dibagi nol!";
            } else {
                $hasil = $x / $y;
            }
            break;
    }
    echo "Hasil : $x $op $y = $hasil <br><br>";
}
?>
<form method="POST">
    <input type="number" name="x" required>
    <select name="op">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="number" name="y" required>
    <button type="submit" name="hitung">Hitung</button>
</form>
<hr>

<?php