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

}