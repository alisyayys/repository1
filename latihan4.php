<?php
echo "<h2>4. Bilangan 1-20 Ganjil / Genap</h2>";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo "$i - Genap <br>";
    } else {
        echo "$i - Ganjil <br>";
    }
}
echo "<hr>";