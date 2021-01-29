<?php
function skor_terbesar($arr){
    $nama=array_column($arr,'nama');
    $kelas=array_column($arr,'kelas');
    $nilai=array_column($arr,'nilai');

    array_multisort($nilai,SORT_DESC,$nama,SORT_DESC,$kelas,SORT_DESC,$arr);
    
    echo "Array (<br>";
    foreach($arr as $key){
        echo "[".$key['kelas']."] => Array <br> (<br>";
        echo "[nama] => ".$key['nama']."<br>";
        echo "[kelas] => ".$key['kelas']."<br>";
        echo "[nilai] => ".$key['nilai']."<br>)";
    }
    echo "<br>)";
}

// TEST CASES
$skor = [
[
"nama" => "Bobby",
"kelas" => "Laravel",
"nilai" => 78
],
[
"nama" => "Regi",
"kelas" => "React Native",
"nilai" => 86
],
[
"nama" => "Aghnat",
"kelas" => "Laravel",
"nilai" => 90
],
[
"nama" => "Indra",
"kelas" => "React JS",
"nilai" => 85
],
[
"nama" => "Yoga",
"kelas" => "React Native",
"nilai" => 77
],
];

print_r(skor_terbesar($skor));
/* OUTPUT
Array (
[Laravel] => Array
(
[nama] => Aghnat
[kelas] => Laravel
[nilai] => 90
)
[React Native] => Array
(
[nama] => Regi
[kelas] => React Native
[nilai] => 86
)
[React JS] => Array
(
[nama] => Indra
[kelas] => React JS
[nilai] => 85
)
)
*/
?>