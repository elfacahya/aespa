<?php

$name = $_POST ['name'];
$nohp = $_POST ['nohp'];
$jumlah = $_POST ['cardnumber'];
$jenis = $_POST ['combo1'];
$metode = $_POST ['combo2'];

echo "<strong> Nama : </strong>";
echo $name. "<br>";
echo "<strong> No Hp : </strong>";
echo $nohp. "<br>";
echo "<strong> Jumlah Tiket : </strong>";
echo $jumlah. "<br>";
echo "<strong> Jenis Tiket : </strong>";
echo $jenis. "<br>";
echo "<strong> Metode Pembayaran : </strong>";
echo $metode. "<br>";

?>