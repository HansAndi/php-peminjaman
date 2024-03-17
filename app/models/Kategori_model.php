<?php

class Kategori_model {
    private $table = 'kategori';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllKategori() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }


    public function tambahDataKategori($data)
    {
        $query = "INSERT INTO kategori VALUES ('',:genre)"; 
        $this->db->query($query);
        $this->db->bind('genre', $data['genre']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getKategoriById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function updateDataKategori($id, $data)
    {
        $query = "UPDATE " . $this->table . " SET genre = :genre WHERE id = :id"; // Added space after UPDATE
        $this->db->query($query);
        $this->db->bind(':genre', $data['genre']); // Corrected binding placeholder
        $this->db->bind(':id', $id); // Binding ID
        $this->db->execute();
        return $this->db->rowCount();
    }
    

    public function hapusDataKategori($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>