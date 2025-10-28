const form = document.getElementById('formMahasiswa');
const tabelBody = document.querySelector('#tabelData tbody');
let dataMahasiswa = [];

form.addEventListener('submit', (e) => {
  e.preventDefault();

  const nama = document.getElementById('nama').value.trim();
  const nim = document.getElementById('nim').value.trim();
  const semester = document.getElementById('semester').value.trim();
  const prodi = document.getElementById('prodi').value; // singkatan (TI, TM, dll)
  const email = document.getElementById('email').value.trim();

  if (!nama || !nim || !semester || !prodi || !email) {
    alert("Semua field wajib diisi!");
    return;
  }

  const mahasiswa = { nama, nim, semester, prodi, email };
  dataMahasiswa.push(mahasiswa);

  console.log("Data Mahasiswa:", mahasiswa);
  console.log("Semua data:", dataMahasiswa);

  updateTabel();
  form.reset();
});

function updateTabel() {
  tabelBody.innerHTML = '';
  dataMahasiswa.forEach((mhs, index) => {
    const row = tabelBody.insertRow();
    const cellNo = row.insertCell(0);
    const cellNama = row.insertCell(1);
    const cellInfo = row.insertCell(2);

    cellNo.textContent = index + 1;
    cellNama.textContent = mhs.nama;
    cellInfo.textContent = `Semester: ${mhs.semester}\nProdi: ${mhs.prodi}`;
  });
}
