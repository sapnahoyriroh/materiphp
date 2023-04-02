<?php
require_once 'abstrack.php';
class segitiga extends Bentuk2D{
    public $alas =10;
    public $tinggi =10;
    // public function __construct($alas,$tinggi){
    //     $this->alas;
    //     $this->tinggi;
    // }
    public function namaBidang(){
        $namabidang = "Segitiga";
        return $namabidang;
    }
    public function luasBidang(){
        $luas = 1/2*$this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingbidang(){
        $keliling = $this->alas + $this->tinggi + $this->tinggi;
        return $keliling;
    }

}



?>