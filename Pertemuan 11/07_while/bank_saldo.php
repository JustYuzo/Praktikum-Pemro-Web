<?php
$saldo_akhir = 0;
$n = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari form
    $saldo_awal = isset($_POST['saldo_awal']) ? (float)$_POST['saldo_awal'] : 0;
    $n = isset($_POST['n_bulan']) ? (int)$_POST['n_bulan'] : 0;

    $saldo_akhir = $saldo_awal;
    $biaya_admin = 9000;
    $batas_saldo = 1100000;
    $bunga_rendah = 0.03 / 12; // 3% p.a. / 12 bulan
    $bunga_tinggi = 0.04 / 12; // 4% p.a. / 12 bulan

    echo "<h3>Detail Perhitungan Saldo Selama $n Bulan:</h3>";
    echo "Saldo Awal: Rp " . number_format($saldo_awal, 0, ',', '.') . "<br>";
    echo "<table border='1' style='border-collapse: collapse; margin-top: 10px;'>";
    echo "<tr><th>Bulan ke-</th><th>Saldo Awal Bulan</th><th>Bunga Bulanan</th><th>Biaya Admin</th><th>Saldo Akhir Bulan</th></tr>";

    // Loop perhitungan saldo selama N bulan
    for ($i = 1; $i <= $n; $i++) {
        $saldo_awal_bulan = $saldo_akhir;

        // Tentukan persentase bunga bulanan
        $bunga_persen = ($saldo_awal_bulan < $batas_saldo) ? $bunga_rendah : $bunga_tinggi;
        
        // Hitung bunga bulanan
        $bunga_nominal = $saldo_awal_bulan * $bunga_persen;
        
        // Saldo baru
        $saldo_akhir = $saldo_awal_bulan + $bunga_nominal - $biaya_admin;

        // Tampilkan detail per bulan
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>Rp " . number_format($saldo_awal_bulan, 0, ',', '.') . "</td>";
        echo "<td>Rp " . number_format($bunga_nominal, 0, ',', '.') . " (" . number_format($bunga_persen * 12 * 100, 0) . "% p.a.)</td>";
        echo "<td>Rp " . number_format($biaya_admin, 0, ',', '.') . "</td>";
        echo "<td>**Rp " . number_format($saldo_akhir, 0, ',', '.') . "**</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><strong>Saldo Akhir Setelah $n Bulan adalah: Rp " . number_format($saldo_akhir, 0, ',', '.') . "</strong>";
}
?>

<h3>Input Saldo Tabungan</h3>
<form method="post" action="">
    Saldo Awal (Rp): <input type="number" name="saldo_awal" value="1000000" min="1" required><br><br>
    Jangka Waktu (N bulan): <input type="number" name="n_bulan" value="12" min="1" required><br><br>
    <input type="submit" value="Hitung Saldo Akhir">
</form>