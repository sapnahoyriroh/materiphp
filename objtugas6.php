<?php  
require 'Pegawai.php'; 
 
$pegawai1 = new Pegawai('01111','Risda','Manager','Islam','Lajang','10000000'); 
$pegawai2 = new Pegawai('01112','Nana','Asisten Manager','Islam','Menikah','10000000'); 
$pegawai3 = new Pegawai('01113','Bby','Kepala Bagian','Islam','Lajang','10000000'); 
$pegawai4 = new Pegawai('01114','Rena','Staff','Islam','Menikah','10000000'); 
$pegawai5 = new Pegawai('01115','Atta','OB','Islam','Lajang','10000000'); 
 
 
$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5]; 
 
foreach($ar_pegawai as $pegawai){ 
    $pegawai->cetakDataPegawai(); 
} 
 
 
?>