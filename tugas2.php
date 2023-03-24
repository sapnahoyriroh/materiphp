<html> 
    <body> 
<form method="post" > 
  <label for="jabatan">Jabatan:</label> 
  <select id="jabatan" name="jabatan"> 
    <option value="Manager">Manager</option> 
    <option value="Asisten">Asisten</option> 
    <option value="Kabag">Kabag</option> 
    <option value="Staff">Staff</option> 
  </select> 
  <br> 
    <br> 
    <label> Status </label> 
    <input type="text" name="status" placeholder="Masukan status"> 
    <br> 
    <br> 
    <label> Agama </label> 
    <input type="text" name="agama" placeholder="Masukan agama"> 
  <br> 
  <input type="submit" name="hitung" value="HITUNG"> 
  <label for="jumlah_anak"> 
<?php 
$jabatan = $_POST['jabatan']; 
$status = $_POST['status']; 
$agama = $_POST['agama']; 
 
switch($jabatan) { 
  case 'Manager': 
    $gapok = 20000000; 
    $tunjangan_jabatan = $gapok*20/100; 
    break; 
  case 'Asisten': 
    $gapok = 15000000; 
    $tunjangan_jabatan = $gapok*20/100; 
    break; 
  case 'Kabag': 
    $gapok = 10000000; 
    $tunjangan_jabatan = $gapok*20/100; 
    break; 
  case 'Staff': 
    $gapok = 4000000; 
    $tunjangan_jabatan = $gapok*20/100; 
    break; 
  default: 
    $gapok = 0; 
} 
 
if ($jabatan == "Manager" && $status =='single') 
$tunjangan_keluarga = '0'; 
elseif ($jabatan == "Manager" && $status =='menikah') 
$tunjangan_keluarga = $gapok*5/100; 
elseif ($jabatan == "Manager" && $status =='menikah anak 3') 
$tunjangan_keluarga = $gapok*10/100; 
 
switch ($jabatan) 
{ 
case "Manager": $gaji_kotor=$gapok + $tunjangan_jabatan + $tunjangan_keluarga; break; 
    default; 
} 
 
if($agama == 'islam' && $jabatan == "Manager" && $gaji_kotor >= 6000000)  
$zakat_profesi = $gaji_kotor * 0.25/100; 
elseif($agama == 'islam' && $jabatan == "Manager"  && $gaji_kotor < 6000000)  
$zakat_profesi = 0; 
elseif($agama == 'kristen' && $jabatan == "Manager"  )  
$zakat_profesi = 0; 
 
switch ($jabatan) 
{ 
case "Manager": $take_home_pay= $gapok - $zakat_profesi; break; 
    default; 
} 
 
 
echo "Jabatan: " . $jabatan . "<br>"; 
echo "Gaji Pokok: " . $gapok . "<br>"; 
echo "Tunjangan Jabatan: " . $tunjangan_jabatan . "<br>"; 
echo "Status: " . $status . "<br>"; 
echo "Tunjangan Keluarga: " . $tunjangan_keluarga . "<br>"; 
echo "Gaji Kotor: " . $gaji_kotor . "<br>"; 
echo "Zakat Profesi: " . $zakat_profesi . "<br>"; 
echo "Take Home Pay: " . $take_home_pay . "<br>"; 
?>