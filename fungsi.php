<?php
//menghitung total belanja dengan menggunakan diskon

function hitungTotalBelanja($harga, $jumlah){
    $total = $harga * $jumlah;
    return $total;
}
function berikanDiskon($total, $diskon){
    $diskon = $total * $diskon;
    $total_diskon = $total - $diskon;
    return $total_diskon;
}

$harga_barang = 100;
$jumlah_barang = 5;
$diskon_persen = 0.1; //10% untuk diskon

$total_harga = hitungTotalBelanja($harga_barang, $jumlah_barang);
$total_setelah_diskon = berikanDiskon($total_harga, $diskon_persen);

echo"Total belanja: $total_harga";
echo"Total setelah diskon: $total_setelah_diskon";

?>  `         
