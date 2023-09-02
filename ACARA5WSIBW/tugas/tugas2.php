<?php
function getdateNow() {
    $tanggal = date("d");
    $bulan = date("m");
    $tahun = date("Y");
    return "$tanggal-$bulan-$tahun";
}

$tanggalSekarang = getdateNow();
echo "Tanggal, Bulan, dan Tahun saat ini: " . $tanggalSekarang;
?>
 