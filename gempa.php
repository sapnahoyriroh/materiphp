<?php
class Gempa{

private $lokasi;
private $skala;
public function __construct($lokasi, $skala){
    $this->lokasi = $lokasi;
    $this->skala = $skala;
}
private function dampak($skala){
    $this->skala = $skala;
    if($skala>= 0 && $skala <= 2)
    $dampak = 'Tidak Terasa';
    else if($skala > 2 && $skala <= 4)
    $dampak = 'Bangunan Retak-retak';
    else if ($skala > 4 && $skala <= 6)
    $dampak = 'Bangunan roboh';
    else $dampak = "Berpotensi tsunami";
    return $dampak;
}

public function cetak(){
    echo 'Lokasi :'.$this->lokasi;
    echo '<br> Skala : '.$this->skala;
    echo '<br> Dampak '.$this->dampak($this->skala);
    echo '<hr>';
}

}


?>