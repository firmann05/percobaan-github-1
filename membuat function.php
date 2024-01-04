<?php
//function
function perkalian($parameter1,$parameter2){
    $hasil = $parameter1 * $parameter2;
    return $hasil;
}
echo perkalian(10,5);//paramenter1=10, paramenter2=5
echo "<br/>";
echo perkalian(5,2);
echo "<br/>";

$phi = 3.14;
define("PHI",3.14);
function luaslingkaran($jarijari){
    //global $phi;
     $hasil = PHI * $jarijari * $jarijari;
     return $hasil;
}
echo luaslingkaran(10);
echo "<br/>";
echo luaslingkaran(5);
?>