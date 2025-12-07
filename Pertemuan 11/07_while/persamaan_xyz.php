<?php
    echo "<h2>Penyelesaian Persamaan: x + y + z = 25</h2>";
    $jumlah_penyelesaian = 0;

    // Loop tingkat 1 (untuk x)
    for ($x = 1; $x <= 23; $x++) {
        
        // Batasan y: y tidak boleh melebihi sisa 25 setelah dikurangi x (y + z = 25 - x). 
        // Karena z minimum 1, maka y_max = (25 - x) - 1.
        $y_max = 24 - $x; 
        
        // Loop tingkat 2 (untuk y)
        for ($y = 1; $y <= $y_max; $y++) {
            
            // Hitung nilai z. z = 25 - x - y
            $z = 25 - $x - $y;

            // Cek apakah z adalah bilangan asli (z >= 1)
            // Cek ini sebenarnya tidak diperlukan lagi jika batasan y_max sudah benar
            if ($z >= 1) {
                // Tampilkan pasangan solusi
                echo "x = $x, y = $y, z = $z <br>";
                $jumlah_penyelesaian++;
            }
        }
    }

    echo "<br>***<br>";
    echo "Jumlah penyelesaian: **" . $jumlah_penyelesaian . "**";
?>