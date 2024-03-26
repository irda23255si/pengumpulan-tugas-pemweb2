<?php

$nama = $_POST['nama'];
$makanan = $_POST['makanan'];

include 'hewan.php';

$hewan = new Hewan($nama, $makanan);
$klasifikasi = $hewan->klasifikasiHewan();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hewan</title>
</head>
<body>
    <table border="1" width="100%"> 
        <thead> 
            <tr> 
                <th>NO</th>
                <th>Nama Hewan</th>
                <th>Makanan</th>
                <th>Klasifikasi Hewan</th>
            </tr>
        </thead > 
        <tbody align="center">     
       <tr>
         <td>1</td>
         <td> <?= $nama ?></td>
         <td> <?= $makanan ?></td>
         <td> <?= $klasifikasi ?></td>
       </tr>
       </tbody> 
       </table>
       </body>

</html>