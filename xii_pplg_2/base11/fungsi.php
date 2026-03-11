<?php
    function db(){
      $koneksi = mysqli_connect("localhost","root","","XII_PPLG_2");

      if ($koneksi->connect_errno == 1){//jika iya
      return $koneksi->connect_error;//maka tampilkan error
    }else{

      return $koneksi ;// KEMBALIKAN NILAI CONNECT
  
    }}

    function tampil(){
      $query = "SELECT * FROM sayur"; //perintah
      
      $data = mysqli_query (db(), $query);  //fungsi sql 

      return $data; //memberikan data
      
      }
?>