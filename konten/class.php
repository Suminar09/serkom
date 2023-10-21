<?php
class Mobil {
    public $merk;
    public $model;

    public function __construct($merk, $model) {
        $this->merk = $merk;
        $this->model = $model;
    }

    public function info() {
        return "Ini adalah mobil {$this->merk} model {$this->model}.";
    }
}

// Membuat objek dari kelas Mobil
$mobil1 = new Mobil("Toyota", "Camry");

// Mengakses properti dan metode
echo $mobil1->merk; // Output: Toyota
echo $mobil1->model; // Output: Camry
echo $mobil1->info(); // Output: Ini adalah mobil Toyota model Camry.
?>