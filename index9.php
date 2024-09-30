<?php
$uang = 150000;
$pecahan = [100000,50000, 20000, 500];
$hasil = [];

foreach ($pecahan as $nilai) {
    $hasil[$nilai] = intdiv($uang, $nilai);
    $uang = $uang % $nilai;
}

echo "<br>";
echo "<br>";
echo "Lembar Rupiah";
echo "<br>";

foreach ($hasil as $nilai => $lembar) {
    echo "Rp " . number_format($nilai, 0, ',', '.') . ": " . $lembar . "<br>";
}