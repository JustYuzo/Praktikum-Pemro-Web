<?php
$golongan = isset($_POST['golongan']) ? $_POST['golongan'] : '';
$jam_kerja = isset($_POST['jam_kerja']) ? intval($_POST['jam_kerja']) : 0;
$upah_per_jam_normal = 0;
$upah_lembur = 3000;
$jam_maks_normal = 48;
$total_upah = 0;

// 1. Tentukan Upah Normal Berdasarkan Golongan (menggunakan SWITCH)
switch ($golongan) {
    case 'A':
        $upah_per_jam_normal = 4000;
        break;
    case 'B':
        $upah_per_jam_normal = 5000;
        break;
    case 'C':
        $upah_per_jam_normal = 6000;
        break;
    case 'D':
        $upah_per_jam_normal = 7500;
        break;
    default:
        echo "Golongan tidak valid.";
        exit;
}

// 2. Hitung Upah Total (menggunakan IF...ELSE)
if ($jam_kerja <= $jam_maks_normal) {
    // Tidak ada lembur
    $upah_normal_total = $jam_kerja * $upah_per_jam_normal;
    $jam_lembur = 0;
    $upah_lembur_total = 0;
    $total_upah = $upah_normal_total;
} else {
    // Ada lembur
    $jam_lembur = $jam_kerja - $jam_maks_normal;
    $upah_normal_total = $jam_maks_normal * $upah_per_jam_normal;
    $upah_lembur_total = $jam_lembur * $upah_lembur;
    $total_upah = $upah_normal_total + $upah_lembur_total;
}

echo "<h2>Hasil Perhitungan Gaji</h2>";
echo "Golongan: " . $golongan . "<br>";
echo "Jam Kerja Total: " . $jam_kerja . " jam<br>";
echo "Upah Normal per Jam: Rp " . number_format($upah_per_jam_normal, 0, ',', '.') . "<br>";
echo "Upah Lembur per Jam: Rp " . number_format($upah_lembur, 0, ',', '.') . "<br>";
echo "---<br>";
echo "Upah Normal (48 jam): Rp " . number_format($upah_normal_total, 0, ',', '.') . "<br>";
echo "Upah Lembur (" . $jam_lembur . " jam): Rp " . number_format($upah_lembur_total, 0, ',', '.') . "<br>";
echo "<strong>Total Upah Diterima: Rp " . number_format($total_upah, 0, ',', '.') . "</strong>";
?>