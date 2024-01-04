<?php
$angka1 = 5;
$angka2 = 15;

//*soal no 1*//

echo "jawaban no 1";
echo "<br>";
echo "<br>";

$hasil = $angka1 + $angka2;
echo "hasil penjumlahan :" . $hasil;
echo "<br>";

$hasil = $angka1 * $angka2;
echo "hasil perkalian :" . $hasil;
echo "<br>";

$hasil = $angka1 / $angka2;
echo "hasil pembagian :" . $hasil;
echo "<br>";

$hasil = $angka1 % $angka2;
echo "hasil modulan :" . $hasil;
echo "<br>";
echo "<br>";

//*soal no 2*//

echo "jawaban no 2";
echo "<br>";
echo "<br>";

$x = 10;
$x += 5;
$x -= 2;

echo "penugasan :" . $x;
echo "<br>";
echo "<br>";

//*soal no 3*//

echo "jawaban no 3";
echo "<br>";
echo "<br>";

$nilai1 = 10;
$nilai2 = 7;
$hasil1 = $nilai1 > $nilai2;
echo "hasi perbandingan :" . $hasil1;
echo "<br>";
$hasil2 = $nilai1 == $nilai2;
echo "hasil perbandingan :" . $hasil2;
echo "<br>";
echo "<br>";

//*soal no 4*//

echo "jawaban soal no 4 :";
echo "<br>";

$benar = true;
$salah = false;
$A= $benar >0 && $salah >0;
print "hasil uji :" . $A;
$V = $benar >0 || $salah >0;
echo "<br>";
echo "hasil uji :" . $V;
echo "<br>";
echo "<br>";

//*soal no 5*//

echo "JAWABAN SOAL NOMOR 5";
echo "<br>";

$hitung = 5;
$hitung++;
$hitung--;
echo "Hasil Increment Decrement: " . $hitung;
echo "<br>";
echo "<br>";

//*soal no 6*//

echo "JAWABAN SOAL NOMOR 6";
echo "<br>";
$namadepan = "fir";
$namabelakang = " mann";
echo "Nama lengkap: " . $namadepan .= $namabelakang;
echo "<br>";
echo "<br>";

//*soal no 7*//

echo "JAWABAN SOAL NOMOR 7";
echo "<br>";
$g = 8; 
$k = 6;
echo $rata_rata = ($g + $k) / 2;
echo "<br>";
$perbandingan = $rata_rata > 5;
echo "Hasil perbandingan: " . $perbandingan;
?>