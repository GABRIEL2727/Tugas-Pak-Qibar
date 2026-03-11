<?php

function angka1(){
    echo 17; //echo berfungsi untuk menampilkasn
}

function angka2(){
    return 17; //return  = menjadikan fungsi bernilai
}
function angka3( $data) {
    echo "<br>";
    echo "data ku =", $data;

    
}

$umur = 17;
 if(angka2()>= 17){
    echo"Dapat KTP";
 }
 else{
    echo"Gak dapat KTP";
 }

angka3("too cool");

?>