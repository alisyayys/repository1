<?php
echo "<h2>6. Daftar Nilai Siswa</h2>";

$siswa = [
    ["nama" => "natsuki",  "nilai" => 85],
    ["nama" => "yuki",  "nilai" => 90],
    ["nama" => "hatsuki", "nilai" => 75],
    ["nama" => "kanna",  "nilai" => 95],
    ["nama" => "katerine",   "nilai" => 60],
];

$daftar_nilai = array_column($siswa, "nilai");
$rata_rata   = array_sum($daftar_nilai) / count($daftar_nilai);

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>No</th><th>Nama</th><th>Nilai</th></tr>";
$no = 1;
foreach ($siswa as $s) {
    echo "<tr><td>$no</td><td>{$s['nama']}</td><td>{$s['nilai']}</td></tr>";
    $no++;
}
echo "</table>";
echo "Rata-rata : $rata_rata <br>";
echo "Tertinggi : " . max($daftar_nilai) . "<br>";
echo "Terendah  : " . min($daftar_nilai) . "<br><hr>";