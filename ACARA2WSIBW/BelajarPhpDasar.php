<?php
//int
$umur = 20;
$harga=15000;
$rugi=-500000;

//String
$Nama='Fadil';
$Naleng= "Fadillah wahyu nugraha";

echo $umur;
echo "<br/>";
echo $harga;
echo "<br/>";
echo $rugi;
echo "<br/>";
echo $Nama;
echo "<br>";
echo $Naleng;
echo "<br>";






//NGASAH LOGIKA SAJA

$n1 = 20;
$n2 = 30;
$hasil = $n1+$n2;


//IF PERTAMA
if($hasil != 50){
    echo "true";
}else{
    echo "false";
}

    echo "<br>";// baris baru setelah if pertama

 for($i=1; $i<10; $i++){
  echo "angka ke-$i<br>";
 }


//PERCOBAAN NESTED IF
 if($n1 = 20){
    $n1 = $n2;
    if($n1 = 20){
        echo $n1;
    }else{
        echo "Nilai if bukan 20";
 }}else{
    echo "ada error di kondisi ig";
 }

 echo "<br>";// baris baru setelah if kedua

 //PERCOBAAN TRY CATCH
 try{
if($n1 >= $n2){
    echo "False";
}else{
    echo "true";
}
}catch(Exception ){
    return "ada yang salah";
}

?>
<br><br><br><br><br>


FYI : FADIL BARU BELAJAR DI BAHASA INI JADI WAJAR KALO CODENYA GA RAPI YGY:V