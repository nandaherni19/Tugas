<?php
$data = [
    ["nama" => "Ani", "umur" => 20],
    ["nama" => "Budi", "umur" => 21],
    ["nama" => "Citra", "umur" => 22],
    ["nama" => "Deni", "umur" => 23],
    ["nama" => "Eka", "umur" => 24]
];

$json = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents("data.json", $json);

echo "<pre>$json</pre>";
?>