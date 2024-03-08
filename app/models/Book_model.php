<?php

class Book_model {
    private $table = 'book';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBook()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultAll();
    }

    public function getBookById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function tambahDataBook($data) {
        $query = "INSERT INTO book VALUES ('', :judul, :penulis, :penerbit, :tahun, :cover, :summary)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('summary', $data['summary']);

        // Check if cover key exists in data array
        if(isset($data['cover'])) {
            $this->db->bind('cover', $data['cover']);
        } else {
            // If cover key does not exist, bind a default value
            $this->db->bind('cover', 'default.jpg');
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

}