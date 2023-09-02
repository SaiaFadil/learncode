<?php
function cariTerbesar($bilangan1, $bilangan2) {
    if ($bilangan1 > $bilangan2) {
        return $bilangan1;
    } else {
        return $bilangan2; 
    }
}

$bilangan1 = 100;
$bilangan2 = 150;
$bilanganTerbesar = cariTerbesar($bilangan1, $bilangan2);
echo "Bilangan terbesar adalah: " . $bilanganTerbesar;
?>
