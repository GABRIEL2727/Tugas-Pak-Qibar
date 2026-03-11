<?php
$db = mysqli_connect(
    "localhost", //hosting name
    "root",        //username
     "",            //password
     "xii_pplg_2"    //database name
);

//die dump
// var damp menjelaskan tipe datanya itu apa
// $a = 10;
// var_dump($a);

// var_dump($db);


// connect_erno = ditanya sama servernya(error kagak?)
if ($db->connect_errno == 0){
    return "Database Terkoneksi";
}else{
    return "Database tidak terkoneksi";
}

?>
