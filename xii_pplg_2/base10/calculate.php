<?php
$c = $f = $k = $r = 0;  

function cek_data($data){
    if(isset($_GET[$data])==true){
        if($_GET[$data] == NULL){
            return 0;
            }else{
      return $_GET[$data];
    }
}else{
    return 0;
}
}

function cel_conv($cel)

//di dalam fungsi tidak bisa memanggil apapaun diluar fungsi, tapi bisa pakai global
// global berfungsi memanggil variabel di luar fungsi
{
    
global $c, $f, $k, $r;

$c = $cel;
$f = ($cel * 9/5) + 32;
$k = $cel + 273.15;
$r = $cel * 4/5;
}

function far_conv($far){
global $c, $f, $k, $r;
$f = $far;
$c = ($far - 32) * 5/9;
$k = $far + 459.67 * 5/9;
$r = ($far - 32) * 4/9;
}

function kel_conv($kel){
global $c, $f, $k, $r;  
$k = $kel;
$c = $kel - 273.15;
$f = $kel * 9/5 - 459.67;
$r = ($kel - 273.15) * 4/5;
}

function rea_conv($rea){
global $c, $f, $k, $r;
$r = $rea;
$c = $rea * 5/4;
$f = $rea * 9/5 + 32;
$k = $rea + 273.15;
}


    $dor = cek_data('dor');

if($dor == "celci"){
    cel_conv(cek_data('celcius'));
    }
    elseif($dor == "fare"){
        far_conv(cek_data('farenheit'));
    }
    elseif($dor == "kelv"){
        kel_conv(cek_data('kelvin'));
    }
    elseif($dor == "rea"){
        rea_conv(cek_data('reamur'));
    }
    
?>