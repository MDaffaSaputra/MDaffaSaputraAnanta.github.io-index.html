<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $ketua = $_POST["ketua"];
    $wakil = $_POST["wakil"];
    $sekretaris = $_POST["sekretaris"];
    $bendahara = $_POST["bendahara"];

    // Simpan data ke database atau file
    // Contoh menggunakan file
    $data = "Nama: $nama\nKetua: $ketua\nWakil: $wakil\nSekretaris: $sekretaris\nBendahara: $bendahara\n\n";
    file_put_contents("data.txt", $data, FILE_APPEND);
}
?>
