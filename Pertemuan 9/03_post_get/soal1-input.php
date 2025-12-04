<!DOCTYPE html>
<html>
<head>
    <title>Soal 1: Hitung Saldo Akhir</title>
</head>
<body>
    <h1>Hitung Saldo Akhir Tabungan</h1>
    <form method="post" action="soal1-proses.php">
        <table>
            <tr>
                <td>Masukkan Saldo Awal (Rp.)</td>
                <td>:</td>
                <td><input type="text" name="saldo_awal"></td>
            </tr>
            <tr>
                <td>Masukkan Bunga Per Bulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga_persen"></td>
            </tr>
            <tr>
                <td>Masukkan Lama Menabung (Bulan)</td>
                <td>:</td>
                <td><input type="text" name="lama_bulan"></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Hitung Saldo Akhir">
        <input type="reset" name="reset" value="Hapus">
    </form>
</body>
</html>