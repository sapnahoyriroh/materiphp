<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$h1 = new lingkaran();
$h2 = new PersegiPanjang();
$h3 = new segitiga();
// $h3 = new segitiga(20,20);
$ar_judul = ['Nama Bidang','Luas Bidang','Keliling Bidang'];

echo "<table border='2' cellpadding='10px' width='100%'>";

foreach ($ar_judul as $j){  
echo "<th> $j</th>";}
$bidang = [$h1];
$bidang = [$h2];
$bidang = [$h3];
$bidang = [$h1,$h2,$h3];
foreach ($bidang as $data){
    echo "<tr>";
    echo '<td>'. $data->namaBidang();
    echo '<td>'.$data->luasBidang();
    echo '<td>'.$data->kelilingBidang();
    echo "</tr>";
}
?>