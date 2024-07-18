<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama1']);
    $email = htmlspecialchars($_POST['email1']);
    $pesan = htmlspecialchars($_POST['pesan1']);
    $umur = htmlspecialchars($_POST['umur1']);
    $alamat = htmlspecialchars($_POST['alamat1']);

    $data = "Nama: $nama\nEmail: $email\nPesan: $pesan\nUmur: $umur\nAlamat: $alamat\n\n";

    $file = 'data.txt';

    $fp = fopen($file, 'a');

    fwrite($fp, $data);

    fclose($fp);

    echo "<h2>Terimakasi sudah mengirim pesan, data berhasil disimpan!</h2>";
    echo '<p><a href="index.html">Kembali ke Formulir</a></p>';
} else {
    echo "Akses tidak sah";
}
?>
