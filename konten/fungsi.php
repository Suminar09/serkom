<?php
function tambah($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    return $hasil;
}

$hasil_penambahan = tambah(5, 3); // Memanggil fungsi dan menyimpan hasilnya dalam variabel

echo "Hasil penambahan: " . $hasil_penambahan; // Output: Hasil penambahan: 8
?>