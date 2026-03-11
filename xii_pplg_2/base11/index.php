<?php include 'fungsi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h2>
    <?php db(); ?>
   </h2> 
<tr>
   <h1>Sayur Mayur</h1>
   <table border="1">

    <th>No</th>
    <th>Sayur</th>
    <th>Aksi</th>
</tr>

<?php
$num = 1;
foreach(tampil()as $x){
?>

<tr>
    <td><?= $num; ?></td>
    <td><?=$x['keranjang']; ?></td>
    <td><a href="">Hapus</a></td>
</tr>

<?php
$num++;
}

?>

   </table>

   
</body>
</html>