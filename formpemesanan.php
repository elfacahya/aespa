<?php

$name = $_POST ['name'];
$nohp = $_POST ['nohp'];
$jumlah = $_POST ['cardnumber'];
$alamat= $_POST['alamat'];
$metode = $_POST ['combo1'];

echo "<strong> Nama : </strong>";
echo $name. "<br>";
echo "<strong> No Hp : </strong>";
echo $nohp. "<br>";
echo "<strong> Jumlah Tiket : </strong>";
echo $jumlah. "<br>";
echo "<strong> Alamat : </strong>";
echo $alamat. "<br>";
echo "<strong> Metode Pembayaran : </strong>";
echo $metode. "<br>";

?>