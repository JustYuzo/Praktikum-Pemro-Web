<?php
$saldoAwal = 1000000;
$bunga = 0.0025;
$bulan = 11;

// Menghitung total bunga yang diperoleh: (Saldo Awal * Bunga Per Bulan) * Jumlah Bulan
$totalBunga = $saldoAwal * $bunga * $bulan;

// Menghitung Saldo Akhir
$saldoAkhir = $saldoAwal + $totalBunga;

echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoAkhir . ",-";
?>