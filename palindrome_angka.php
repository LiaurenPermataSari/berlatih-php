<?php

function palindrome_angka($angka) {
    echo "Hasil Palindrome angka ".$angka." : ";
    $arr=str_split($angka);
    $panjangarr=count($arr);
    if($panjangarr==1){
        $angka=$angka+1;
        echo "$angka<br>";
    }
    else {    
        $n=0;
        $pembalik;
        for ($i=$panjangarr-1;$i>=0;$i--){
            $pembalik[$n]=$arr[$i];
            $n++;
        }
        $hasilbalik=implode("",$pembalik);
        $asli=$angka;
        $tambah=$angka;
        if ($hasilbalik!=$angka){
            while ($hasilbalik!=$asli){
                $tambah++;
                $asli++;
                $arr=str_split($tambah);
                $panjangarr=count($arr);
                $n=0;
                for($i=$panjangarr-1;$i>=0;$i--){
                    $pembalik[$n]=$arr[$i];
                    $n++;
                }
                $hasilbalik=implode("",$pembalik);
            }
            echo $hasilbalik."<br>";
        }
        else {
            echo $hasilbalik."<br>";
        }
        

        /*
        $jumlahdigit=0;
        $angka=$asli+1;
        while ($angka!=0){
            $digit=$angka%10;
            $jumlahdigit=$jumlahdigit*10 + $digit;
            $angka=$angka/10;
            
        }*/
             
    }
}

// TEST CASES

echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
echo palindrome_angka(1001); // 1001

?>