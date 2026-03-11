<!-- Pengolahan data -->
 <?php
 include 'db.php'; //disertakan

 $data = mysqli_query(
    $db,
    "SELECT * FROM jadwal"
 );
 
 ?>
 <!-- pengolahan data -->
  <!-- tampilan -->
   <html>
    <head><title>sayang guru</title></head>
    <body>
        <h1>Daftar Guruku Tersayang</h1>
        <a href="tambah_guru.php">Tambah</a>
        <table border="1">
        <tr>
        <th>no</th>
        <th>matpel</th>
        <th>nama guru</th>
        <th>hari</th>
        </tr>

        <?php
foreach($data as $x){

    ?>
        <tr>

         <td><?= $x['no']?></td>
          <td><?= $x['mata_pelajaran']?></td>
           <td><?= $x['nama_guru']?></td>
            <td><?= $x['hari']?></td>

        </tr></table>
    <?php
   // echo $x['no'];
    // echo $x ['mata_pelajaran'];
    // echo $x ['nama_guru'];
    // echo $x ['hari'];
};
        ?>
    </body>
   </html>

    <!-- tampilan -->