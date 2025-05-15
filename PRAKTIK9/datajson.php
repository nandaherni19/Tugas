<?php
$data = [
    ["nama" => "riko", "umur" => 19],
    ["nama" => "heachan", "umur" => 19],
    ["nama" => "jeno", "umur" => 18],
    ["nama" => "mark", "umur" => 19],
    ["nama" => "suho", "umur" => 19],
    ["nama" => "kai", "umur" => 19],
    ["nama" => "ryu", "umur" => 21],
    ["nama" => "rio", "umur" => 19],
    ["nama" => "karina", "umur" => 20],
    ["nama" => "kirana", "umur" => 21],
    ["nama" => "sakuya", "umur" => 20],
    ["nama" => "sehun", "umur" => 20],
    ["nama" => "lay", "umur" => 21],
    ["nama" => "chen", "umur" => 19],
    ["nama" => "renjun", "umur" => 20],
];

// Konversi ke JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan
echo "<pre>$jsonData</pre>";
?>