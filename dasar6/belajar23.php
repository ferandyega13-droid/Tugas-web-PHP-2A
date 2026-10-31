<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Modul Pemrograman Mobile",
        "penulis" => "Iqbal Khaqiqi"
    ],
    [
        "judul" => "Modul Dasar Pemrograman dengan C++",
        "penulis" => "Iqbal Khaqiqi"
    ],
    [
        "judul" => "Panduan Block Programming dengan SCRATCH",
        "penulis" => "Iqbal Khaqiqi"
    ]
];
 
// menampilkan array
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis ".$item["penulis"]."<p>";
    echo "<br>";
}
 
?>