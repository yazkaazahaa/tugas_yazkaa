<?php
// variabel
$pemasukan=50000000;
$a=16500000;
$bunga_a= $a*0.05;
$b=9500000;
$bunga_b= $b*0.045;

//operasi
$totalbunga= $bunga_a + $bunga_b;
$totalhutang= ($a+$bunga_a) + ($b+$bunga_b);
$sisa_uang= $pemasukan-$totalhutang;

//output
echo "SISA UANG = RP $sisa_uang <br>";
echo "JUMLAH TOTAL BUNGA HUTANG = RP $totalbunga <br>";
echo "JUMLAH TOTAL HUTANG = RP $totalhutang <br>";
?>
                    
