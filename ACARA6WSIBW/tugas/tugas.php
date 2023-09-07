<?php
// Matriks A
$matrixA = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];
// Matriks B
$matrixB = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];
// Inisialisasi matriks hasil penjumlaan
$resultMatrix = [];

// Melakukan penjumlahan matriks A dan B
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resultMatrix[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
    }
}
// Menampilkan matriks hasil penjumlahan
echo "Hasil Penjumlahan Matriks A dan B: <br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultMatrix[$i][$j] . " ";
    }
    echo "<br>";
}
?>
