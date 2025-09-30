function runExercises() {
    console.clear();

    // soal 1: const
    const universitas = "Universitas muhammadiyah kalimnatan timur";
    console.log("Nama universitas",universitas);

    // soal 2: let
    let jumlahMahasiswa = 25;
    jumlahMahasiswa = jumlahMahasiswa + 5;
    console.log("Jumlah mahasiswa sekarang",jumlahMahasiswa);

    // soal 3: string
    let namaLengkap = "ahmad sahroni";
    console.log("halo, nama saya:", namaLengkap);

    // soal 4 : number
    let angka1 = 10;
    let angka2 = 5;
    console.log("hasil penjumlahan:", angka1 + angka2);
    console.log("hasil pengurangan:", angka1 - angka2);
    console.log("hasil perkalian:", angka1 * angka2);
    console.log("hasil pembagian:", angka1 / angka2);

    // soal 5: boolean
    let nilaiUjian = 80;
    let lulus = nilaiUjian >= 70;
    console.log("apakah lulus?", lulus);
}