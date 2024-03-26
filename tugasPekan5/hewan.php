<?php

class Hewan { 
    public $nama;
    public $makanan;
    
    public function __construct($nama, $makanan) {
        $this->nama = $nama;
        $this->makanan = $makanan;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getMakanan(){
        return $this->makanan;
    }
    
    public function klasifikasiHewan(){

        if($this->makanan == 'daging') {
             return 'Karnivora';
        } elseif ( $this->makanan == 'tumbuhan') {
            return 'Herbivora';
        } else  {
        return 'Omnivora';

}
}
}
?>