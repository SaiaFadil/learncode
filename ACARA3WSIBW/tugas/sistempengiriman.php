<?php //Fadillah wahyu nugraha
$destination = "Nganjuk"; 
$modelpengiriman = "";

if ($destination == "Nganjuk") {
    $modelpengiriman = "Pengiriman reguler"; 
} else {
    $modelpengiriman = "Pengiriman ekspres"; 
}

echo "Metode pengiriman: " . $modelpengiriman . "\n";
?>
