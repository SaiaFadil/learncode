<?php
$hasil1= -3;
$hasil2=3+5;
$hasil3=8-4.5;
$hasil4=2*5;
$hasil5=3+8/5-3;
$hasil6=10 % 4;
$hasil7='Testing 1';
$hasil8="Testing 2";
var_dump($hasil1); // $hasil1:int(-3)
echo "<br \>";
echo "\$hasil2:"; var_dump($hasil2); // $hasil2:int(8)
echo "<br \>";
echo "\$hasil3:"; var_dump($hasil3); // $hasil3:float(3.5)
echo "<br \>";
echo "\$hasil4:"; var_dump($hasil4); // $hasil4:int(10)
echo "<br \>";
echo "\$hasil5:"; var_dump($hasil5); // $hasil5:float(1.6)
echo "<br \>";
echo "\$hasil6:"; var_dump($hasil6); // $hasil6:int(2)
echo "<br \>";
echo "\$hasil7:"; var_dump($hasil7); // $hasil6:int(2)
echo "<br \>";
echo "\$hasil8:"; var_dump($hasil8); // $hasil6:int(2)
echo "<br> <br>";

$a = 10;
$a = $a + 5;
$a = $a - 10;
echo "a = $a";
echo "<br />";
// sama hasilnya dengan kode berikut:
$b = 10;
$b += 5; // sama dengan $b = $b + 5;
$b -= 10;// sama dengan $b = $b - 10;
echo "b = $b";







?>