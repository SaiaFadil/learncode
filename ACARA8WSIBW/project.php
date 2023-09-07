<?php

class MtkOperation {
    // Method untuk menjumlahkan dua angka
    public static function add($a, $b) {
        return $a + $b;
    }
    public static function subtract($a, $b) {
        return $a - $b;
    }
    public static function multiply($a, $b) {
        return $a * $b;
    }
    public static function divide($a, $b) {
        if ($b == 0) {
            return "Pembagian oleh nol tidak valid";
        }
        return $a / $b;
    }
}

// Definisikan kelas Calculator
class Calculator {
    // Method untuk menampilkan hasil perhitungan
    public static function calculate($a, $b, $operation) {
        switch ($operation) {
            case 'add':
                return MtkOperation::add($a, $b);
            case 'subtract':
                return MtkOperation::subtract($a, $b);
            case 'multiply':
                return MtkOperation::multiply($a, $b);
            case 'divide':
                return MtkOperation::divide($a, $b);
            default:
                return "Operasi matematika tidak valid";
        }
    }
}

// Penggunaan aplikasi
$num1 = 10;
$num2 = 5;
$operation = 'add';

$result = Calculator::calculate($num1, $num2, $operation);
echo "Hasil perhitungan: $result";
?>
