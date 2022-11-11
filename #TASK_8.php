<?php
function perkalian($angka1, $angka2)
{
    $hasil = $angka1*$angka2;
    return $hasil;
}
$hasil = perkalian(20,3);
echo "Perkalian 20 x 3 adalah $hasil";
echo "<br>";
echo "Perkalian 9 x 2 adalah" . perkalian (9, 2);