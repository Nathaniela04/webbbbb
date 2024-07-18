<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $umur = htmlspecialchars($_POST['umur']);
    $nama = htmlspecialchars($_POST['nama']);
    $hobi = htmlspecialchars($_POST['hobi']);
    $tgl = htmlspecialchars($_POST['tgl']);

    $data = "Email: $email\nUmur: $umur\nNama: $nama\nHobi: $hobi\nTanggal Pengisian: $tgl\n\n";
    $file = 'data.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX); 

    echo "<h2>Data yang Anda kirim:</h2>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Umur:</strong> $umur</p>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Hobi:</strong> $hobi</p>";
    echo "<p><strong>Tanggal Pengisian:</strong> $tgl</p>";
    
    echo '<br><br>';
    echo '<a href="index.html">Kembali ke Formulir</a>';
} else {
    echo "Akses tidak sah";
}
?>
