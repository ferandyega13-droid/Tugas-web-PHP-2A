<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Modul Pemorgraman Mobile",
    "penulis" => "Iqbal Khaqiqi",
    "jumlah_halaman" => 110
];
 
// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";

// membuat array asosiatif "ga bisa pak error"
/*
$artikel = [
    "judul" = "Modul Pemorgraman Mobile",
    "penulis" = "Rudy Eko Prasetya",
    "jumlah_halaman" = 110
];
 
// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>Penulis: ".$artikel["penulis"]."</p>";
echo "<p>Jumlah Halaman: ".$artikel["jumlah_halaman"]."</p>";
*/
?>