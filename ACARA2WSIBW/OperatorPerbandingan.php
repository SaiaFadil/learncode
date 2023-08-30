<?php
echo "1. 12 < 14 = "; var_dump(12<14); // bool(true)
echo "<br />";
echo "2. 14 < 14 = "; var_dump(14<14); // bool(false)
echo "<br />";
echo "3. 14 <= 14 = "; var_dump(14<=14); // bool(true)
echo "<br />";
echo "4. 10 <> '10' = "; var_dump(10<>'10'); // bool(false)
echo "<br />";
echo "5. 10 == '10' = "; var_dump(10=='10'); // bool(true)
echo "<br />";
echo "6. 10 === '10' = "; var_dump(10==='10'); // bool(false)
echo "<br />";
echo "7. '150' == '1.5e2' = "; var_dump('150'=='1.5e2'); // bool(true)
echo "<br />";
echo "8. 'duniailkom' == 0 = "; var_dump('duniailkom'==0); // bool(true)
echo "<br />";
?>
