<?php

class Penerbit_model {
    private $table = 'penerbit';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPenerbit() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    public function tambahDataPenerbit($data)
    {
        $query = "INSERT INTO " . $this->table . " (nama_penerbit, alamat, no_hp) VALUES (:nama_penerbit, :alamat, :no_hp)";
        $this->db->query($query);
        $this->db->bind('nama_penerbit', $data['nama_penerbit']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getPenerbitById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function updateDataPenerbit($id, $data)
    {
        $query = "UPDATE " . $this->table . " SET nama_penerbit=:nama_penerbit, alamat=:alamat, no_hp=:no_hp WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama_penerbit', $data['nama_penerbit']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPenerbit($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>