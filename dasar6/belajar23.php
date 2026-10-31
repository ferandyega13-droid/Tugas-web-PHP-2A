<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Modul Pemrograman Mobile",
        "penulis" => "Ferandy Ega Putra Pratama"
    ],
    [
        "judul" => "Modul Dasar Pemrograman dengan C++",
        "penulis" => "Ferandy Ega Putra Pratama"
    ],
    [
        "judul" => "Panduan Block Programming dengan SCRATCH",
        "penulis" => "Ferandy Ega Putra Pratama"
    ]
];
 
// menampilkan array
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis ".$item["penulis"]."<p>";
    echo "<br>";
}
 
?>