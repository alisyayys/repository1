<?php
echo "<h2>7. Luas dan Keliling Lingkaran</h2>";

function hitungLuas($r) {
    return 3.14 * $r * $r;
}
function hitungKeliling($r) {
    return 2 * 3.14 * $r;
}

foreach ([7, 14] as $r) {
    echo "Jari-jari = $r <br>";
    echo "Luas = " . hitungLuas($r) . "<br>";
    echo "Keliling = " . hitungKeliling($r) . "<br><br>";
}
echo "<hr>";