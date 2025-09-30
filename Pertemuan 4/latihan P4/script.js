console.log("script praktikum dijalankan!");

// variabel untuk menangkap elemen dari html
const elnama = document.getElementById("nama-mhs");
const elnilai = document.getElementById("nilai-mhs");
const elstatus = document.getElementById("status-kelulusan");

// mengambil input elemen
const inputnama = document.getElementById("input-nama");
const inputnilai = document.getElementById("input-nilai");

// menangani klik tombol submit
document.getElementById('submit-btn').addEventListener('click', function() {
    // Ambil nilai dari input
    const nama = document.getElementById('input-nama').value;
    const nilai = document.getElementById('input-nilai').value;

    // Tampilkan hasil pada elemen
    document.getElementById('nama-mhs').textContent = nama || '-';
    document.getElementById('nilai-mhs').textContent = nilai || '-';

    // Tentukan status kelulusan
    let status = 'status: ';
    if (nilai === '') {
        status += 'masukkan nilai!';
    } else if (Number(nilai) >= 60) {
        status += 'lulus';
    } else {
        status += 'tidak lulus';
    }
    document.getElementById('status-kelulusan').textContent = status;
});
// menampilkan nama dan nilai
    elnama.textContent = namaMahasiswa;
    elnilai.textContent = nilai;

    // logika kelulusan
    let pesanstatus = "";
    let isLulus;

    if (nilai >= 75) {
        pesanstatus = "Selamat, Anda dinyatakan LULUS!";
        isLulus = true;
    } else {
        pesanstatus = "tetap semangat, Anda harus mengulang.";
        isLulus = false;
    }

    // men