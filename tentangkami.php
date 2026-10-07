<?php include('framework/header.php'); ?>

<?php include('framework/nav.php'); ?>

    <div class="tentang-kami">
        <div class="tentang-kami-container">
            <div class="kolom-kiri">
                <section class="profil-developer">
                    <div class="profil-container">
                        <img src="images/gambar1.jpg" class="profil-img" alt="Foto Developer">
                        <div class="profil-text">
                            <h5>Novita Septiyani</h5>
                            <p>NIM : 412023015</p> 
                            <p>Jurusan : Informatika</p> 
                            <p>Universitas : Universitas Kristen Krida Wacana 
                        </div>
                    </div>
                    <div class="profil-container">
                        <div class="tujuan-text">
                            <p>Halo! Saya Novita, seorang mahasiswa Informatika yang memiliki minat besar dalam pemrograman
                            web dan pengembangan teknologi. Saat ini, saya tengah mengembangkan situs ini sebagai bagian 
                            dari eksplorasi saya di bidang pengembangan web. Saya percaya bahwa teknologi memiliki kekuatan 
                            untuk mengubah dunia menjadi tempat yang lebih baik, dan saya antusias untuk terus belajar, berinovasi, 
                            dan menciptakan solusi yang bermanfaat bagi banyak orang.
                            </p>
                            <p>Dengan semangat dan dedikasi, saya berkomitmen untuk memperluas pengetahuan saya, berbagi pengalaman, 
                            serta mengeksplorasi berbagai tantangan baru di dunia teknologi. Terima kasih telah mengunjungi situs 
                            saya, dan saya berharap proyek ini dapat memberikan nilai lebih untuk Anda!
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="kolom-kanan">
                <section class="form-kontak">
                    <h5>Form Pengaduan</h5>
                    <form method="POST" action="proseskontak.php">
                        <label for="nama">Nama :</label>
                        <input type="text" id="nama" name="nama" required>
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                        <label for="pesan">Pesan :</label>
                        <textarea id="pesan" name="pesan" rows="4" required></textarea>
                        <button type="submit">Kirim</button>
                    </form>
                    <div id="response"></div>
                </section>
            </div>
        </div>

        <div class="alamat-ikuti">
            <div class="alamat">
                <h6>Alamat Kami</h6>
                <p>Jl. Alpukat V No.51, Tj. Duren Utara, Kec. Grogol Petamburan, 
                    Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470
                </p>
            </div>
            <div class="media-sosial">
                <h6>Ikuti Kami</h6>
                <div class="ikon-sosial">
                    <a href="mailto:novitanovi1004@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
                    <a href="https://www.instagram.com/novitaa.sep?igsh=eno5c215MGdqdzE=" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/+6285742344874" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.tiktok.com/@llejjno23" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.facebook.com/ImyourNovita" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>

<?php include('framework/footer.php'); ?>
