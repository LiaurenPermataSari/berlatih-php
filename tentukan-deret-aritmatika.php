<?php
function tentukan_deret_aritmatika($arr) {
    $tampil=implode(",",$arr);
    echo "<h4>Tentukan deret aritmatika dari $tampil: <h4>";
    $selisihawal=$arr[1]-$arr[0];
    $penentuan=$selisihawal;
    $panjangarr=(count($arr))-1;
    
    
    for($i=0;$i<$panjangarr;$i++){
        $j=$i+1;
        $selisih=$arr[$j]-$arr[$i];
        if($selisih!=$selisihawal){
            $penentuan=$selisih;
        }
    }
    if($penentuan!=$selisihawal){
        echo "false";
    }
    else{
        echo "true";
    }
    echo "<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>