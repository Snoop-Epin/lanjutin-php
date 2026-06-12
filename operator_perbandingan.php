<?php



$nilai1 = 17;
$nilai2 = 3;

$samaDengan = $nilai1 == $nilai2;
$tidakSamaDengan = $nilai1 != $nilai2;
$kurangDari = $nilai1 < $nilai2;
$lebihDari = $nilai1 < $nilai2;
$kurangDariAtauSamaDengan = $nilai1 <= $nilai2;
$lebihDariAtauSamaDengan = $nilai1 >= $nilai2;

echo "sama dengan" . $samaDengan . "<br/>";
echo "tidak sama dengan" . $tidakSamaDengan . "<br/>";
echo "kurang dari" . $kurangDari . "<br/>";
echo "lebih dari" . $kurangDari . "<br/>";
echo "kurang dari atau sama dengan" . $kurangDariAtauSamaDengan . "<br/>";
echo "lebih dari atau sama dengan" . $lebihDariAtauSamaDengan . "<br/>";
?>