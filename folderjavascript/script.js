/*Kode Cuaca*/
const apiKey = 'ISI_API_KEY_KAMU';
const city = 'Yogyakarta';
const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric&lang=id`;

fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        console.log(data);  
        document.getElementById('suhu').innerText = `Suhu: ${data.main.temp}°C`;
        document.getElementById('kondisi').innerText = `Kondisi: ${data.weather[0].description}`;
        document.getElementById('angin').innerText = `Kecepatan Angin: ${data.wind.speed} m/s`;
    })
    .catch(error => {
        console.error('Error:', error);  
        document.getElementById('suhu').innerText = 'Tidak dapat memuat data cuaca.';
        document.getElementById('kondisi').innerText = 'Coba lagi nanti.';
        document.getElementById('angin').innerText = '';
    });
    