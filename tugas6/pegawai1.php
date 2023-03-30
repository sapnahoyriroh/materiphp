<?php 
 
class Pegawai { 
    private $nip; 
    private $nama; 
    private $jabatan; 
    private $agama; 
    private $status; 
    private $gaji_pokok; 
 
    // constructor 
    public function __construct($nip, $nama, $jabatan, $agama, $status, $gaji_pokok) { 
        $this->nip = $nip; 
        $this->nama = $nama; 
        $this->jabatan = $jabatan; 
        $this->agama = $agama; 
        $this->status = $status; 
        $this->gaji_pokok = $gaji_pokok; 
    } 
 
    // method untuk menghitung tunjangan jabatan 
    public function setTunjab() { 
        $tunjangan_jabatan = $this->gaji_pokok * 0.2; 
        return $tunjangan_jabatan; 
    } 
 
    // method untuk menghitung tunjangan keluarga 
    public function setTunkel() { 
        $tunjangan_keluarga = $this->status == "Menikah" ? $this->gaji_pokok * 0.1 : 0; 
        return $tunjangan_keluarga; 
    } 
 
    // public function gajikotor() { 
    //     $tunjangan_keluarga = $this->status == "menikah" ? $this->gaji_pokok * 0.1 : 0; 
    //     return $tunjangan_keluarga; 
    // } 
 
    // method untuk menghitung zakat profesi 
    public function setZakatProfesi() { 
        $zakat_profesi = ($this->agama == "Islam" && $this->gaji_pokok >= 6000000) ? $this->gaji_pokok * 0.025 : 0; 
        return $zakat_profesi; 
    } 
 
    // method untuk mencetak data pegawai 
    public function cetakDataPegawai() { 
        $tunjangan_jabatan = $this->setTunjab(); 
        $tunjangan_keluarga = $this->setTunkel(); 
        $zakat_profesi = $this->setZakatProfesi(); 
        $gaji_kotor = $this->gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga; 
        $gaji_bersih = $this->gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga-$zakat_profesi; 
 
        echo "NIP: " . $this->nip . "<br>"; 
        echo "Nama: " . $this->nama . "<br>"; 
        echo "Jabatan: " . $this->jabatan . "<br>"; 
        echo "Agama: " . $this->agama . "<br>"; 
        echo "Status: " . $this->status . "<br>"; 
        echo "Gaji Pokok: " . $this->gaji_pokok . "<br>"; 
        echo "Tunjangan Jabatan: " . $tunjangan_jabatan . "<br>"; 
        echo "Tunjangan Keluarga: " . $tunjangan_keluarga . "<br>"; 
        echo "Gaji Kotor : " . $gaji_kotor. "<br>"; 
        echo "Zakat Profesi: " . $zakat_profesi . "<br>"; 
        echo "Gaji Bersih: " . $gaji_bersih . "<br>"; 
        echo '<hr>'; 
 
    } 
} 
 
?>