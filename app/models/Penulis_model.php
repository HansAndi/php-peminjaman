<?php

class Penulis_model
{
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

    public function getPenulisById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataPenulis($data)
    {
        // $data['tanggal_lahir'] = date('Y-m-d', strtotime($data['tanggal_lahir']));
        $query = "INSERT INTO penulis (nama_penulis, jenis_kelamin, tanggal_lahir) VALUES (:nama_penulis, :jenis_kelamin, :tanggal_lahir)";
        $this->db->query($query);
        $this->db->bind('nama_penulis', $data['nama_penulis']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function hapusDataPenulis($id)
    {
        $query = "DELETE FROM penulis WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updatePenulis($id, $data)
    {
        $query = "UPDATE penulis SET nama_penulis = :nama_penulis, jenis_kelamin = :jenis_kelamin, tanggal_lahir = :tanggal_lahir WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama_penulis', $data['nama_penulis']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
