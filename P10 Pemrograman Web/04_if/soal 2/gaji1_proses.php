<?php
$jam_kerja = isset($_POST['jam_kerja']) ? intval($_POST['jam_kerja']) : 0;
$upah_normal = 2000;
$upah_lembur = 3000;
$jam_maks_normal = 48;
$total_upah = 0;
$jam_lembur = 0;

if ($jam_kerja <= $jam_maks_normal) {
    // Tidak ada lembur
    $total_upah = $jam_kerja * $upah_normal;
    $jam_normal = $jam_kerja;
    $jam_lembur = 0;
} else {
    // Ada lembur
    $jam_normal = $jam_maks_normal;
    $jam_lembur = $jam_kerja - $jam_maks_normal;
    
    $upah_normal_total = $jam_normal * $upah_normal;
    $upah_lembur_total = $jam_lembur * $upah_lembur;
    $total_upah = $upah_normal_total + $upah_lembur_total;
}

echo "<h2>Hasil Perhitungan Gaji</h2>";
echo "Jam Kerja Total: " . $jam_kerja . " jam<br>";
echo "Upah Normal per Jam: Rp " . number_format($upah_normal, 0, ',', '.') . "<br>";
echo "Upah Lembur per Jam: Rp " . number_format($upah_lembur, 0, ',', '.') . "<br>";
echo "---<br>";
echo "Jam Normal (≤48 jam): " . $jam_normal . " jam<br>";
echo "Jam Lembur (>48 jam): " . $jam_lembur . " jam<br>";
echo "<strong>Total Upah Diterima: Rp " . number_format($total_upah, 0, ',', '.') . "</strong>";
?>