<?php

function papan_catur($angka) {
    for($i=0;$i<$angka;$i++){
        if($i%2==0){
            for($j=0;$j<$angka;$j++){
                echo "# ";
            }
        }
        else{
            for($j=0;$j<$angka-1;$j++){
                echo " ";
                echo "#";
            }
        }
        echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
echo "<h3>Papan Catur(4)<h3>";
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
*/
echo "<h3>Papan Catur(8)<h3>";
echo papan_catur(8);
/*
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<h3>Papan Catur(5)<h3>";
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # #
# # # # #
*/