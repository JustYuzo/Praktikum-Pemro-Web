<?php
$tahun = isset($_POST['tahun']) ? intval($_POST['tahun']) : 0;

if ($tahun <= 0) {
    echo "Masukkan tahun yang valid.";
} else {
    // Logika Tahun Kabisat: Habis dibagi 4, kecuali habis dibagi 100 tapi tidak habis dibagi 400.
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        $status = "adalah Tahun Kabisat";
    } else {
        $status = "bukan Tahun Kabisat";
    }

    echo "Tahun yang dimasukkan adalah: " . $tahun . "<br>";
    echo "Status: Tahun " . $tahun . " " . $status;
}
?>