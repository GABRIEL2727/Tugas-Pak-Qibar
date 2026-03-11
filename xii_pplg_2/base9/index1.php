<?php
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
?>




<html>
    <head><title>kalkulator</title></head>
    <body>
        <h1>Angka 1 =</h1>
        <h1>Angka 2</h1>
        <h1>Hasil =</h1>
        <hr>
        <form action="" method="get">
            <label >angka 1</label>
            <input type="number" name="angka1">
            <br>
             <label >angka 2</label>
            <input type="number" name="angka2">
            <br>
            <input type="submit" value="tambah">
        </form>
    </body>
</html>