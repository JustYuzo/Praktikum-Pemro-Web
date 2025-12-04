<!DOCTYPE html>
<html>
<head>
    <title>Soal 3: Hasil Pendaftaran</title>
</head>
<body>
    <?php
        // Ambil data dari form menggunakan $_POST
        $namaLengkap = $_POST['nama_lengkap'];
        $tempatLahir = $_POST['tempat_lahir'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $asalSekolah = $_POST['asal_sekolah'];
        $nilaiUAN = $_POST['nilai_uan'];
        
        // Output sesuai format contoh soal
        echo "<h1>Terimakasih **$namaLengkap** sudah mengisi form pendaftaran.</h1>";
        echo "<table>";
        echo "<tr><td>Nama Lengkap</td><td>:</td><td>$namaLengkap</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>:</td><td>$tempatLahir</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>:</td><td>$tgl-$bln-$thn</td></tr>";
        echo "<tr><td>Alamat Rumah</td><td>:</td><td>$alamat</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>:</td><td>$jk</td></tr>";
        echo "<tr><td>Asal Sekolah</td><td>:</td><td>$asalSekolah</td></tr>";
        echo "<tr><td>Nilai UAN</td><td>:</td><td>$nilaiUAN</td></tr>";
        echo "</table>";
    ?>
</body>
</html>