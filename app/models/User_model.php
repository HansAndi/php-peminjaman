<?php
class User_model {
    private $nama = 'Otak Kanan';
    private $tempat = 'Perpustakaan';

    public function getUser() {
        return $this->nama;
    }

    public function getTempat() {
        return $this->tempat;
    }
}
