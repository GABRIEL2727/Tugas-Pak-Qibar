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
$f = ($c * 9/5) + 32;
$k = $c + 273.15;
$r = $c * 4/5;
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

function far_conv($far){

global $c, $f, $k, $r;

$f = $far;
$c = ($f - 32) * 5/9;
$k = $c + 273.15;
$r = $c * 4/5;
}


if($dor == "fare"){
    far_conv(cek_data('farenheit'));
    }
function kel_conv($kel){

global $c, $f, $k, $r;  

$k = $kel;
$c = $k - 273.15;
$f = ($c * 9/5) + 32;
$r = $c * 4/5;

}

if($dor == "kelv"){
    kel_conv(cek_data('kelvin'));
    }

function rea_conv($rea){
global $c, $f, $k, $r;
$r = $rea;
$c = $r * 5/4;
$f = ($c * 9/5) + 32;
$k = $c + 273.15;
}
if($dor == "rea"){
    rea_conv(cek_data('reamur'));
    }
    
?>