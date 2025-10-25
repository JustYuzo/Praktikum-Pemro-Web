<?php
$jumlahUang = 1575250;

// Menghitung Pecahan Rp. 100.000,- ($a)
$a = floor($jumlahUang / 100000);
$sisa = $jumlahUang % 100000;

// Menghitung Pecahan Rp. 50.000,- ($b)
$b = floor($sisa / 50000);
$sisa = $sisa % 50000;

// Menghitung Pecahan Rp. 20.000,- ($c)
$c = floor($sisa / 20000);
$sisa = $sisa % 20000;

// Menghitung Pecahan Rp. 5.000,- ($d)
$d = floor($sisa / 5000);
$sisa = $sisa % 5000;

// Menghitung Pecahan Rp. 100,- ($e)
$e = floor($sisa / 100);
$sisa = $sisa % 100;

// Menghitung Pecahan Rp. 50,- ($f)
$f = floor($sisa / 50);

echo "Jumlah Rp. 100.000 : " . $a . "<br />";
echo "Jumlah Rp. 50.000 : " . $b . "<br />";
echo "Jumlah Rp. 20.000 : " . $c . "<br />";
echo "Jumlah Rp. 5.000 : " . $d . "<br />";
echo "Jumlah Rp. 100 : " . $e . "<br />";
echo "Jumlah Rp. 50 : " . $f . "<br />";
?>