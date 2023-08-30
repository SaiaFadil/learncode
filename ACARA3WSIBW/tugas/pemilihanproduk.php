<?php //Fadillah wahyu nugraha
$productType = "Basreng"; 
$recommendedProduct = "";

if ($productType == "Basreng") {
    $recommendedProduct = " Basreng Pedas level 2"; 
} elseif ($productType == "fashion") {
    $recommendedProduct = "Baju muslim";
} else {
    $recommendedProduct = "Produk lainnya"; 
}

echo "Rekomendasi produk best seller: " . $recommendedProduct . "\n";
?>

