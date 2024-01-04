<?php
//soal pertama
$bilangan = 2;
if ($bilangan >= 1) {
    echo "bilangan positif";
}
echo "<br>";

//soal kedua
$a = 2;
if ($a == 2) {
    echo "bilangan genap";
} else {
    echo "bilangan ganjil";
}
echo "<br>";

//soal ketiga
$nilai1 = "A";
if ($nilai1 == "C") {
    echo "Anda Luar Biasa!";
} elseif ($nilai1 == "B") {
    echo "Anda Baik-Baik saja.";
} elseif ($nilai1 == "C") {
    echo "Anda perlu belajar lebih keras";
} else {
    echo "anda perlu banyak belajar";
}
echo "<br>";

//soal keempat
$nomor_hari = 7;
switch ($nomor_hari) {
    case 1:
        echo "senin";
        break;
    case 2:
        echo "selasa";
        break;
    case 3:
        echo "rabu";
        break;
    case 4:
        echo "kamis";
        break;
    case 5:
        echo "jumat ";
        break;
    case 6:
        echo "sabtu";
        break;
    case 7:
        echo "minggu";
        break;
    default:
        echo "nomor hari tidak valid";
}