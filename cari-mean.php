<?php
function cari_mean($arr){
    $kalimat=implode(",",$arr);
    echo "<h3>Cari Mean [$kalimat]<h3>";
    echo "$kalimat<br>";
    $jumlah=0;
    for($i=0;$i<count($arr);$i++){
        $jumlah=$jumlah+$arr[$i];
    }
    $mean=$jumlah/count($arr);
    $hasil=(int)$mean;
    echo "Maka mean dari array tersebut : $hasil<br>";
}

//TEST CASE

echo cari_mean([1, 2, 3, 4, 5]); // 3

echo cari_mean([3, 5, 7, 5, 3]); // 5

echo cari_mean([6, 5, 4, 7, 3]); // 5

echo cari_mean([1, 3, 3]); // 2

echo cari_mean([7, 7, 7, 7, 7]); // 7

?>