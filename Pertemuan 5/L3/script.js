function cekKelulusan() {
    let nilai = document.getElementById("nilai").value;
    let hasil = document.getElementById("hasil");

    if (nilai === "") {
        hasil.textContent = "⚠️ Silakan masukkan nilai terlebih dahulu.";
        return;
    }

    nilai = parseInt(nilai);
    if (nilai >= 70) {
        hasil.textContent = "Nilai Anda: " + nilai + " - Status: Lulus ✅";
    } else {
        hasil.textContent = "Nilai Anda: " + nilai + " - Status: Tidak Lulus ❌";
    }
}