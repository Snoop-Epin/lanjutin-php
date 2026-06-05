<?php
$siswa = array ("nama" => "anita", "usia" => 19, "kelas" => "XII");

echo "Nama" . $siswa["nama"] . "<br/>";
echo "usia" . $siswa["usia"] . "tahun <br/>";
echo "kelas" . $siswa["kelas"];

"<br/>";

$buah = array("Apel", "Kesemek", "Sirsak", "Anggur");

foreach ($buah as $item) {
    echo "Buah: " .$item . "<br/>";
}
?>