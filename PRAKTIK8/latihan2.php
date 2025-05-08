<?php
     // variabel dalam php
    $txt = "selamat datang !";
    $txt2 = "Politektik Negeri Madiun";
    $x = 5;
    $y = 10.5;

    echo "<p> isi variabel txt adalah: $txt </p>";
    echo "<p> isi variabel x adalah: $x</p>";
    echo "<p> isi variabel y adalah: $y</p>";
    echo  "Bbelajar PHP di " . $txt2 . "<br>";
    echo $x + $y;

    //PHP konstanta
    define("nama_konstanta", "{Raditya Alfareza}");
    echo "<br>".nama_konstanta;
?>