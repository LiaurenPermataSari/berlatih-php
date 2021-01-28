<?php
function ubah_huruf($string){
    $huruf=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $arr=str_split($string);
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($huruf);$j++){
            if($arr[$i]==$huruf[$j]){
                $l=$j+1;
                $hasil[$i]=$huruf[$l];
            }
        }
    }
    echo "Hasil dari ubah huruf ($string): <br><br>";
    $tampil=implode("",$hasil);
    echo "$tampil <br><br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>