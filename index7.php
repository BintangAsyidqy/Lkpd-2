<?php
$nama1 = "Fema Flamelina Putri";
$nama2 = "Artasya Legina";

$jmlahnamaA = strlen($nama1); 
$jmlahnamaB = strlen($nama2); 
$jmlahtotal = $jmlahnamaA-$jmlahnamaB;

if($jmlahnamaA > $jmlahnamaB) {
    echo "nama pertama :".$nama1;
    echo "<br>";
    echo "nama kedua :".$nama2;
    echo "<br>";

    echo $nama1 . " lebih panjang dari " . $nama2 . " dengan selisih " . $jmlahtotal;
} else if ($jmlahnamaA < $jmlahnamaB) {
 
    echo "nama pertama :".$nama2;
    echo "<br>";
    echo "nama kedua :".$nama1;
    echo "<br>";

    echo $nama2 . " lebih panjang dari " . $nama1 . " dengan selisih " . $jmlahtotal;
}else {
    echo "namanya sama panjang";
}

?>
