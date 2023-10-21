<?php
$angka = [1, 2, 3, 4, 5];

foreach ($angka as $nilai) {
    echo $nilai . ' ';
}
// Output: 1 2 3 4 5

$mahasiswa = [
    "nama" => "John",
    "usia" => 25,
    "jurusan" => "Teknik Informatika"
];

foreach ($mahasiswa as $kunci => $nilai) {
    echo "$kunci: $nilai ";
}
// Output: nama: John usia: 25 jurusan: Teknik Informatika
?>