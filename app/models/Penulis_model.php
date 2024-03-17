<?php

class Penulis_model {
    private $table = 'penulis';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenulis()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultAll();
    }

    public function getPenulisById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataPenulis($data) {
        
        $query = "INSERT INTO penulis VALUES ('', :nama_penulis, :jenis_kelamin, :tahun_lahir, :email, :judul_buku)";
        $this->db->query($query);
        $this->db->bind('nama_penulis', $data['nama_penulis']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tahun_lahir', $data['tahun_lahir']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('judul_buku', $data['judul_buku']);

        // // Check if cover key exists in data array
        // if(isset($data['cover'])) {
        //     $this->db->bind('cover', $data['cover']);
        // } else {
        //     // If cover key does not exist, bind a default value
        //     $this->db->bind('cover', 'default.jpg');
        // }



        $this->db->execute();

        return $this->db->rowCount();
    }


    public function hapusDataPenulis($id) {
        $query = "DELETE FROM penulis WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updatePenulis($id, $data) {
        $query = "UPDATE penulis SET judul = :judul, penulis = :penulis, penerbit = :penerbit, tahun = :tahun, summary = :summary WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('summary', $data['summary']);
        $this->db->bind('id', $id);
    
        $this->db->execute();
    
        return $this->db->rowCount();
    }

}