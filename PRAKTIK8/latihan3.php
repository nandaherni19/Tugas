<?php
    $x = 5;
    $y = 10;
       
    // Arithmetic operators
    echo "Penambahan " . ($x + $y) . "<br>";
    echo "Pengurangan " . ($x - $y) . "<br>";
    echo "Perkalian " . ($x * $y) . "<br>";
    echo "Pembagian " . ($x / $y) . "<br>";
    echo "Modulus " . ($x % $y) . "<br>";
    echo "Eksponensial " . ($x ** $y) . "<br>";
    echo("<br>");
       
    // Assignment operators
    $x += 2; // $x = $x + 2
    $y *= 2; // $y = $y * 2
    echo "Penambahan x " . $x . "<br>";
    echo "Perkalian y " . $y . "<br>";
    echo("<br>");
       
    // Increment/Decrement operators
    echo "Isi 4++ = " .++$x. "<br>";
    echo "Isi ++4 = " .$x++. "<br>";
    echo("<br>");
       
    echo "Isi x = " . $x++ . "<br>";
    echo "Isi x = " . ++$x . "<br>";
    echo("<br>");
       
    echo "Isi y = " . $y-- . "<br>";
    echo "Isi y = " . --$y . "<br>";
    echo("<br>");
       
    // Conditional assignment operators
    $user = "Andi darmawan";
    // <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
    $status = (empty($user)) ? "Kosong" : "Ada isi";
    echo $status . "<br>";
       
    // variable $color diisi dengan "red" jika $color tidak ada atau null
    echo $color = $color ?? "red";

    echo "<h3>Perbedaan \$x++ dan ++\$x</h3>";
    echo "<p><strong>\$x++</strong> disebut <em>post-increment</em>, 
    yaitu operator penambahan satu yang dilakukan <strong>setelah</strong> nilai 
    variabel digunakan dalam ekspresi. Artinya, nilai variabel ditampilkan atau digunakan 
    terlebih dahulu, baru kemudian variabel ditambah 1. Sebagai contoh, jika \$x = 5, 
    maka echo \$x++ akan menampilkan 5, dan setelah itu nilai \$x akan menjadi 6.</p>";

?>