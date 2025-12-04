<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php
        $nilaiJual    = $_POST['penjualan']; // membaca nilai penjualan
        $prosenKomisi = $_POST['komisi'];    // membaca nilai prosentase komisi
        
        // hitung komisi berdasarkan prosen komisi
        $komisi = $nilaiJual * $prosenKomisi / 100;
        
        echo "<p>Nilai penjualan salesman: Rp. $nilaiJual.</p>"; // menampilkan nilai penjualan salesman
        echo "<p>Prosentase Komisi: $prosenKomisi %</p>";     // menampilkan nilai prosentase komisi salesman
        echo "<p>Komisi yang didapat salesman adalah Rp. $komisi.</p>"; // menampilkan hasil perhitungan komisi
    ?>
</body>
</html>