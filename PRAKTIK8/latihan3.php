<?php
    $x = 5;
    $y = 10;
       
    // Arithmetic operators
    echo "Penambahan " . $x + $y . "<br>";
    echo "Pengurangan " . $x - $y . "<br>";
    echo "Perkalian " . $x * $y . "<br>";
    echo "Pembagian " . $x / $y . "<br>";
    echo "Modulus " . $x % $y . "<br>";
    echo "Eksponensial " . $x ** $y . "<br>";
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
?>
    <!-- Apa perbedaan $x++ dan ++$x ??

$x++ = Post-Increment ➔ Nilai awal dipakai dulu, baru kemudian ditambahkan 1.
++$x = Pre-Increment ➔ Nilai langsung ditambahkan 1 dulu, baru dipakai.
contoh :
$x = 5;
echo $x++; // Hasil: 5, lalu x jadi 6
echo ++$x; // Hasil: 7 (karena x sudah ditambah duluan) -->