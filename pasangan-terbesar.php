<?php
function pasangan_terbesar($angka){
    $arr=str_split($angka);
    $max=0;
    for ($i=0;$i<count($arr)-1;$i++){
        $j=$i+1;
        $jumlah="$arr[$i]$arr[$j]";
        if($jumlah>$max){
            $max=$jumlah;
        }
    }
    echo "Maka pasangan terbesar pada angka ini $angka : <br><br>$max<br><br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>