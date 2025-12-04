<!DOCTYPE html>
<html>
<head>
    <title>Soal 1: Hasil Saldo Akhir</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>
    <?php
        // Ambil data dari form
        $saldoAwal = (float)$_POST['saldo_awal'];
        $bungaPersen = (float)$_POST['bunga_persen'];
        $lamaBulan = (int)$_POST['lama_bulan'];
        
        // Hitung total bunga
        $bungaDesimal = $bungaPersen / 100;
        $totalBunga = $saldoAwal * $bungaDesimal * $lamaBulan;
        
        // Hitung saldo akhir
        $saldoAkhir = $saldoAwal + $totalBunga;
        
        // Format angka untuk tampilan (opsional, untuk tampilan lebih rapi)
        $saldoAwalF = number_format($saldoAwal, 0, ',', '.');
        $totalBungaF = number_format($totalBunga, 0, ',', '.');
        $saldoAkhirF = number_format($saldoAkhir, 0, ',', '.');
        
        echo "<table>";
        echo "<tr><td>Saldo Awal</td><td>:</td><td>Rp. $saldoAwalF</td></tr>";
        echo "<tr><td>Bunga Per Bulan</td><td>:</td><td>$bungaPersen %</td></tr>";
        echo "<tr><td>Lama Menabung</td><td>:</td><td>$lamaBulan Bulan</td></tr>";
        echo "<tr><td colspan='3'><hr></td></tr>";
        echo "<tr><td>Total Bunga Didapat</td><td>:</td><td>Rp. $totalBungaF</td></tr>";
        echo "<tr><td>**Saldo Akhir**</td><td>:</td><td>**Rp. $saldoAkhirF**</td></tr>";
        echo "</table>";
    ?>
</body>
</html>