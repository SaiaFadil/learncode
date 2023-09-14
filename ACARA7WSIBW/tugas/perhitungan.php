<?php
class Kalkulator {
    private $hasil;

    public function __construct() {
        $this->hasil = 0;
    }

    public function tambah($angka1, $angka2) {
        $this->hasil = $angka1 + $angka2;
    }

    public function kurang($angka1, $angka2) {
        $this->hasil = $angka1 - $angka2;
    }

    public function kali($angka1, $angka2) {
        $this->hasil = $angka1 * $angka2;
    }

    public function bagi($angka1, $angka2) {
        if ($angka2 == 0) {
            throw new Exception("Pembagian oleh nol tidak terdefinisi.");
        }
        $this->hasil = $angka1 / $angka2;
    }

    public function getHasil() {
        return $this->hasil;
    }
}

$kalkulator = new Kalkulator();
$kalkulator->tambah(10, 5);
echo "Jumlah: " . $kalkulator->getHasil() . "<br>"; // Output: Jumlah: 15

$kalkulator->kurang(10, 5);
echo "Selisih: " . $kalkulator->getHasil() . "<br>"; // Output: Selisih: 5

$kalkulator->kali(10, 5);
echo "Hasil Kali: " . $kalkulator->getHasil() . "<br>"; // Output: Hasil Kali: 50

$kalkulator->bagi(10, 2);
echo "Hasil Bagi: " . $kalkulator->getHasil() . "<br>"; // Output: Hasil Bagi: 5

try {
    $kalkulator->bagi(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>"; 
}
?>
