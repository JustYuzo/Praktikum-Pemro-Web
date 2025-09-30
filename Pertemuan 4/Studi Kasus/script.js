// Simulasi data cuaca
const weatherData = {
    "jakarta": {
    temperature: 30,
    condition: "Cerah"
    },
    "bandung": {
    temperature: 25,
    condition: "Hujan Ringan"
    },
    "surabaya": {
    temperature: 33,
    condition: "Panas Terik"
    },
    "samarinda": {
    temperature: 28,
    condition: "Mendung"
    },
    "medan": {
    temperature: 29,
    condition: "Berawan"
    }
};

function cekCuaca() {
    const city = document.getElementById("cityInput").value.toLowerCase();
    const data = weatherData[city];

    if (data) {
    console.log(`Cuaca di ${city.charAt(0).toUpperCase() + city.slice(1)}:`);
    console.log(`Suhu: ${data.temperature}°C`);
    console.log(`Kondisi: ${data.condition}`);
    } else {
    console.log(`Data cuaca untuk kota "${city}" tidak ditemukan.`);
    }
}
