<?php
function tukar_besar_kecil($string){
    echo "Tukar besar kecil dari kalimat $string: <br>";
    $arr=str_split($string);
    for($i=0;$i<count($arr);$i++){
        $pengganti[$i]=$arr[$i];
    }
    for($i=0;$i<count($arr);$i++){
        $upper=strtoupper($pengganti[$i]);
        if($upper==$arr[$i]){
            $arrhasil[$i]=strtolower($upper);
        }
        $lower=strtolower($pengganti[$i]);
        if($lower==$arr[$i]){
            $arrhasil[$i]=strtoupper($lower);
        }
    }

    for($i=0;$i<count($arr);$i++){
        echo "$arrhasil[$i]";
    }
    echo "<br><br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>