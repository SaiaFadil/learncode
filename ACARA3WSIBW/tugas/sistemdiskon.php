<?php //Fadillah wahyu nugraha
$totalPembelian = 50000; 
$diskon = 0;

if ($totalPembelian > 500) {
    $diskon = 10;
}

echo "Total pembelian: Rp." . $totalPembelian . "\n";
echo "Diskon: " . $diskon . "%\n";
echo "Harga yang harus di bayar: ". $totalPembelian-($totalPembelian/$diskon);
?>
