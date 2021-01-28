<?php
function tentukan_deret_geometri($arr) {
    $tampil=implode(",",$arr);
    echo "<h4>Tentukan deret geometri dari $tampil: <h4>";
    $selisihawal=$arr[1]/$arr[0];
    $penentuan=$selisihawal;
    $panjangarr=(count($arr))-1;
    
    
    for($i=0;$i<$panjangarr;$i++){
        $j=$i+1;
        $selisih=$arr[$j]/$arr[$i];
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
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true

echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>