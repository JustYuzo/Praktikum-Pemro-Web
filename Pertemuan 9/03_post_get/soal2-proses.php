<!DOCTYPE html>
<html>
<head>
    <title>Soal 2: Hasil Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Perhitungan Pecahan Uang</h1>
    <?php
        // Ambil data dari form dan pastikan sebagai integer
        $jumlahUang = (int)$_POST['jumlah_uang'];
        $sisaUang = $jumlahUang; // Variabel untuk menyimpan sisa uang yang belum dipecah
        
        echo "<p>Jumlah uang yang akan dipecah: **Rp. ".number_format($jumlahUang, 0, ',', '.')."**</p>";
        echo "<table>";
        
        // Definisikan pecahan uang yang tersedia
        $pecahan = [100000, 50000, 20000, 5000, 100, 50];
        
        foreach ($pecahan as $nilai) {
            // Hitung jumlah lembar untuk pecahan saat ini
            $jumlahLembar = floor($sisaUang / $nilai);
            
            // Hitung sisa uang setelah diambil pecahan ini
            $sisaUang = $sisaUang % $nilai;
            
            // Tampilkan hasilnya
            if ($jumlahLembar > 0) {
                echo "<tr>";
                echo "<td>Rp. ".number_format($nilai, 0, ',', '.')."</td>";
                echo "<td>:</td>";
                echo "<td>**$jumlahLembar** lembar</td>";
                echo "</tr>";
            }
        }
        
        // Cek jika ada sisa uang yang tidak bisa dipecah
        if ($sisaUang > 0) {
            echo "<tr><td colspan='3'><hr></td></tr>";
            echo "<tr><td colspan='3'>**Sisa uang yang tidak dapat dipecah: Rp. $sisaUang**</td></tr>";
        }
        
        echo "</table>";
    ?>
</body>
</html>