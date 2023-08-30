<?php //Fadillah wahyu nugraha
$taskStatus = "selesai"; 
$nextAction = "";

if ($taskStatus === "belum selesai") {
    $nextAction = "Lanjutkan pekerjaan"; 
} else {
    $nextAction = "Tugas selesai";
}

echo "Tindakan selanjutnya: " . $nextAction . "\n";
?>
