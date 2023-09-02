<?php
function getDateFormatted($format) {
    return date($format);
}

$tanggalSekarang = getDateFormatted('d-F-Y');
echo "Tanggal, Bulan, dan Tahun saat ini: " . $tanggalSekarang;
?> 
