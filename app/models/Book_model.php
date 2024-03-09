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
        $cover = $this->upload();
        if (!$cover) {
            return false;
        }

        $query = "INSERT INTO book VALUES ('', :judul, :penulis, :penerbit, :tahun, :cover, :summary)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('summary', $data['summary']);
        $this->db->bind('cover', $cover);

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

    public function upload()
    {
        $namaFile = $_FILES['cover']['name'];
        $ukuranFile = $_FILES['cover']['size'];
        $error = $_FILES['cover']['error'];
        $tmpName = $_FILES['cover']['tmp_name'];

        //cek apakah tidak ada gambar yang diupload
        if ($error === 4) {
            echo "<script>
            alert('pilih gambar terlebih dahulu');
            </script>";
            return false;
        }

        //cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
            alert('yang anda upload bukan gambar');
            </script>";
            return false;
        }

        //cek jika ukurannya terlalu besar
        if ($ukuranFile > 1000000) {
            echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";
            return false;
        }

        // $dir = 'C:\laragon\www\php-peminjaman\public\img\\';
        // move_uploaded_file($tmpName, $dir . $namaFile);
        $unique = uniqid();
        $unique .= '.';
        $unique .= $ekstensiGambar;

        move_uploaded_file($tmpName, __DIR__ . '/../../public/img//' . $unique);

        return $unique;
    }

}