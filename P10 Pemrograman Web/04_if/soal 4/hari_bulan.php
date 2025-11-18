<?php
// Mengambil nomor bulan saat ini (1-12)
$bulan_angka = date("n");
$tahun_sekarang = date("Y");
$nama_bulan = date("F"); // Nama bulan dalam bahasa Inggris, bisa disesuaikan
$jumlah_hari = 0;

switch ($bulan_angka) {
    case 1: // Januari
    case 3: // Maret
    case 5: // Mei
    case 7: // Juli
    case 8: // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlah_hari = 31;
        break;
    case 4: // April
    case 6: // Juni
    case 9: // September
    case 11: // November
        $jumlah_hari = 30;
        break;
    case 2: // Februari (Kasus Kabisat)
        // Logika Kabisat (habis dibagi 4, kecuali habis dibagi 100 tapi tidak habis dibagi 400)
        if (($tahun_sekarang % 4 == 0 && $tahun_sekarang % 100 != 0) || ($tahun_sekarang % 400 == 0)) {
            $jumlah_hari = 29;
        } else {
            $jumlah_hari = 28;
        }
        break;
    default:
        $jumlah_hari = "Tidak dapat ditentukan";
        break;
}

echo "<h2>Jumlah Hari dalam Bulan Saat Ini</h2>";
echo "Bulan Saat Ini: " . $nama_bulan . " (" . $bulan_angka . ") Tahun " . $tahun_sekarang . "<br>";
echo "<strong>Jumlah Hari: " . $jumlah_hari . " hari</strong>";
?>