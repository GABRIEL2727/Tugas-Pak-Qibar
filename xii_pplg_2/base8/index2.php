<?php
// super global variabel
// buat kkm 78 keatas lulus

// jadi tampilannya, nama, lulus atau tidak lulus
function cek_data($data){
    if(!isset($_GET[$data])){
        return "no data";
    } else if($_GET[$data] === ""){
        return "no data";
    } else if($_GET[$data] === "bahlil"){
    return "di larang cuyyy : ";
    } else {
        return $_GET[$data];
    }
}


function cek_hasil($hasil){
    if($hasil === "no data"){
        return "no data";
    } else if($hasil > 100){
        return "yang bener kocak = gak mungkin nilai segitu, aneh lu";
    } else if($hasil >= 78){
        return "Lulus = $hasil";
    } else {
        return "Tidak Lulus = $hasil";
    }
}


?>
<html>
    <head>
        <title>Cek nilai USK</title>
    </head>
    <body>
        <h1><?php echo cek_data('nama'); ?></h1>
        <h1><?php echo cek_hasil(cek_data('nilai')); ?></h1>
        <hr>
        <form action="" method="get">
            <label>Nama</label>
            <input type="text" name="nama">
            <br>
            <label>Nilai</label>
            <input type="number" name="nilai">
            <br>
            <input type="submit" value="Cek Nilai">
        </form>
    </body>
</html>