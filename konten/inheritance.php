<?php
class Hewan {
    public $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function suara() {
        return "Hewan ini membuat suara.";
    }
}

class Kucing extends Hewan {
    public function suara() {
        return "Kucing {$this->nama} membuat suara Meow!";
    }
}

class Anjing extends Hewan {
    public function suara() {
        return "Anjing {$this->nama} membuat suara Woof!";
    }
}

// Membuat objek dari kelas turunan
$kucing = new Kucing("Whiskers");
$anjing = new Anjing("Buddy");

// Memanggil metode suara dari objek
echo $kucing->suara(); // Output: Kucing Whiskers membuat suara Meow!
echo $anjing->suara(); // Output: Anjing Buddy membuat suara Woof!
?>