<?php //Fadillah wahyu nugraha
$userRole = "pemilik";
$hakAccess = false;

if ($userRole == "admin") {
    $hakAccess = true; 
}

if ($hakAccess) {
    echo "Anda memiliki akses penuh.\n";
} else {
    echo "Anda memiliki akses terbatas.\n";
}
?>
