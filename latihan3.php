<?php
$nilai = 90;

echo "<h2>3. Konversi Nilai ke Predikat</h2>";
echo "Nilai : $nilai <br> Predikat : ";
if ($nilai >= 90) {
    echo "A";
} elseif ($nilai >= 80) {
    echo "B";
} elseif ($nilai >= 70) {
    echo "C";
} elseif ($nilai >= 60) {
    echo "D";
} else {
    echo "E";
}
echo "<hr>";
