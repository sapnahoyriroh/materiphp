<?php
require_once 'abstrack.php';
class lingkaran extends Bentuk2D{
    public $jari2=20;

    public function namaBidang(){
        $namabidang = "Lingkaran";
        return $namabidang;
    }
    public function luasBidang(){
        $luas = 3.14*$this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingbidang(){
        $luas = 2* 3.14*$this->jari2 * $this->jari2;
        return $luas;
    }

}


?>