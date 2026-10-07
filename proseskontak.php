<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);  
        $email = htmlspecialchars($_POST['email']);
        $pesan = htmlspecialchars($_POST['pesan']);

        if (!empty($nama) && !empty($email) && !empty($pesan)) {

            echo "<h3>Terima kasih, $nama!</h3>";
            echo "<p>Pesan Anda telah berhasil dikirim dan akan segera kami tanggapi.</p>";
        } 
        else {
            echo "<p>Semua field harus diisi!</p>";
        }
    }  
    else {
        echo "<p>Form belum disubmit.</p>";
    }
?>
