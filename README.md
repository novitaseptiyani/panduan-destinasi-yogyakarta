# Panduan Destinasi Yogyakarta

Website panduan wisata, budaya, dan kuliner Yogyakarta, dilengkapi
informasi cuaca real-time.

## Fitur Utama
- Halaman wisata, budaya, kuliner, galeri, dan peta
- Cuaca Yogyakarta secara langsung (suhu, kondisi, kecepatan angin)
  dari OpenWeatherMap API menggunakan Fetch API
- Formulir kontak
- Header, navigasi, dan footer dipisah menjadi komponen yang dipakai
  ulang di semua halaman

## Tech Stack
HTML, CSS, JavaScript (Fetch API), PHP, OpenWeatherMap API

## Cara Menjalankan
Proyek ini memakai PHP, jadi perlu server lokal seperti XAMPP.

1. Clone atau unduh repo ini.
2. Salin foldernya ke `htdocs` di folder XAMPP.
3. Buat API key gratis di openweathermap.org.
4. Buka `folderjavascript/script.js`, lalu ganti
   `ISI_API_KEY_KAMU` dengan API key tersebut.
5. Jalankan Apache di XAMPP, lalu buka
   `http://localhost/panduan-destinasi-yogyakarta/`.
