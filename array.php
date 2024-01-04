<?php
$nama=["fayad", "habib", "ben"];
$nama=array("fayad", "habib", "ben");

echo $nama[0];
echo $nama[1];
echo $nama[2];
echo "<br>";
echo "<br>";
 
for($a=0;$a<3;$a++){
    echo $nama[$a];
}
echo "<br>";
echo "<br>";
$angka=[1,4,5,6,2,1,6,8,9,5,4,3];
echo count($angka);
for($a=0;$a<count($angka);$a++){
    echo $angka[$a];
}

for($b=1;$b<5;$b++)
for($a=1,$a<=$b;$a++)
echo "*";
echo "<br>";
