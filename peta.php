<?php include('framework/header.php'); ?>

<?php include('framework/nav.php'); ?>

    <main>
        <section id="peta" class="container">
            <h4 class="text-center mb-4">Peta Kota Yogyakarta</h4>
            <div id="map-container" class="text-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.2353381348886!2d110.36721211477759!3d-7.797068294380398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a578caaa4f2a3%3A0x8f4b8d7c4200a1d8!2sYogyakarta!5e0!3m2!1sen!2sid!4v1699300880411!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </section>
        
        <section id="cuaca" class="cuaca-container">
            <h4 class="text-center mb-4">Cuaca Terkini di Yogyakarta</h4>
            <div class="cuaca-card">
                <div class="cuaca-details">
                    <p id="suhu">Loading...</p>
                    <p id="kondisi">Loading...</p>
                    <p id="angin">Loading...</p>
                </div>
            </div>
        </section>

        <section id="rekomendasi-hotel" class="container">
            <h4 class="text-center mb-4">Rekomendasi Hotel Terbaik</h4>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/HyattHotel.jpg" class="card-img-top" alt="Hotel 1">
                        <div class="card-body">
                            <h5 class="card-title">Hyatt Regency Yogyakarta</h5>
                            <p class="card-text">Jl. Palagan Tentara Pelajar, Ngaglik, Sleman, Yogyakarta 55581
                                Hotel ini terletak di area yang tenang, sedikit di luar pusat kota, tetapi tetap mudah dijangkau dari berbagai
                                destinasi wisata. Cocok untuk pelancong yang mencari kenyamanan dengan suasana alam yang asri.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/HotelTentrem.jpg" class="card-img-top" alt="Hotel 2">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Tentrem Yogyakarta</h5>
                            <p class="card-text">Jl. P. Mangkubumi No. 72A, Yogyakarta 55232
                                Hotel mewah dengan fasilitas lengkap dan lokasi strategis di pusat kota Yogyakarta, 
                                cocok untuk pengunjung yang mencari kenyamanan dan pelayanan bintang lima.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/PhonixHotel.jpg" class="card-img-top" alt="Hotel 3">
                        <div class="card-body">
                            <h5 class="card-title">The Phoenix Hotel Yogyakarta </h5>
                            <p class="card-text">Jl. Jenderal Sudirman No. 9, Yogyakarta 55233
                                Hotel bersejarah dengan nuansa kolonial yang elegan, terletak di pusat kota dekat 
                                dengan berbagai objek wisata terkenal.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/MeliaHotel.jpeg" class="card-img-top" alt="Hotel 4">
                        <div class="card-body">
                            <h5 class="card-title">Melia Purosani Yogyakarta</h5>
                            <p class="card-text">Jl. Suryotomo No. 31, Yogyakarta 55122
                                Hotel bintang lima dengan fasilitas lengkap, kolam renang outdoor, dan restoran internasional, 
                                hanya beberapa menit dari Keraton Yogyakarta.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/GreenHotel.jpeg" class="card-img-top" alt="Hotel 5">
                        <div class="card-body">
                            <h5 class="card-title">Greenhost Boutique Hotel</h5>
                            <p class="card-text">Jl. Prawirotaman No. 41, Yogyakarta 55153
                                Hotel ramah lingkungan dengan desain modern dan konsep yang kreatif, menawarkan pengalaman unik 
                                di daerah wisata Prawirotaman yang ramai.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/HotelAdhistana.jpg" class="card-img-top" alt="Hotel 6">
                        <div class="card-body">
                            <h5 class="card-title">Adhisthana Hotel Yogyakarta</h5>
                            <p class="card-text">l. Prawirotaman No. 2, Yogyakarta 55153
                                Mengusung konsep desain sederhana dan nyaman, hotel ini terletak di kawasan Prawirotaman, area 
                                yang terkenal dengan kafe dan galeri seni.
                            </p>
                        </div>
                    </div>                
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/HotelAmbarrukmo.jpg" class="card-img-top" alt="Hotel 7">
                        <div class="card-body">
                            <h5 class="card-title">Ambarukmo Hotel Yogyakarta</h5>
                            <p class="card-text">Jl. Laksda Adisucipto No. 81, Yogyakarta 55281
                                Hotel mewah dengan desain yang memadukan gaya tradisional dan modern, terletak di pusat perbelanjaan 
                                dan hiburan Ambarukmo Plaza.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="images/HotelIbis.jpg" class="card-img-top" alt="Hotel 8">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Ibis Yogyakarta</h5>
                            <p class="card-text">Jl. Jendral Sudirman No. 89, Yogyakarta 55233
                                Hotel nyaman dengan harga terjangkau dan fasilitas yang memadai, berada di lokasi strategis di pusat kota, 
                                dekat dengan stasiun dan terminal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
<?php include('framework/footer.php'); ?>
