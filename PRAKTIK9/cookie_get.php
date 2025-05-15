<?php
if (isset($_COOKIE["nama"])) {
    echo "Selamat datang, " . $_COOKIE["nama"];
} else {
    echo "Cookie belum diset.";
}
?>