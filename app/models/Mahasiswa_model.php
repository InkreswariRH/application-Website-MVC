<?php

class Mahasiswa_model
{

   private $table = 'mahasiswa';
   private $db;

   public function __construct()
   {
      $this->db = new Database();
   }

   public function getMhs()
   {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
   }

   public function getMhsById($id)
   {
      $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->single();
   }

   public function tambahDataMhs($data)
   {
      $this->db->query("INSERT INTO " . $this->table . " VALUES
         ('', :nama, :nim, :email, :jurusan)
      ");

      $this->db->bind('nama', $data["nama"]);
      $this->db->bind('nim', $data["nim"]);
      $this->db->bind('email', $data["email"]);
      $this->db->bind('jurusan', $data["jurusan"]);

      $this->db->execute();
      return $this->db->rowCount();
   }

   public function hapus($id)
   {
      $query = "DELETE FROM " . $this->table . " WHERE id=:id";
      $this->db->query($query);
      $this->db->bind('id', $id);
      $this->db->execute();
      return $this->db->rowCount();
   }

   public function ubahDataMahasiswa($data)
   {
      $query = "UPDATE " . $this->table . " SET 
         nama = :nama,
         nim = :nim,
         email = :email, 
         jurusan = :jurusan
         WHERE id=:id
      ";
      $this->db->query($query);

      $this->db->bind('nama', $data["nama"]);
      $this->db->bind('nim', $data["nim"]);
      $this->db->bind('email', $data["email"]);
      $this->db->bind('jurusan', $data["jurusan"]);
      $this->db->bind('id', $data["id"]);

      $this->db->execute();
      return $this->db->rowCount();
   }

   public function cariMhs($key)
   {
      $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";
      $this->db->query($query);
      $this->db->bind('keyword', "%$key%");
      return $this->db->resultSet();
   }



   // private $mhs = [
   //    [
   //       "nama" => "Bae Joohyun",
   //       "nim" => "1234",
   //       "email" => "irene@gmail.com",
   //       "jurusan" => "teknik kimia"
   //    ],
   //    [
   //       "nama" => "Kang Seulgi",
   //       "nim" => "5678",
   //       "email" => "seulgi@gmail.com",
   //       "jurusan" => "teknik industri"
   //    ],
   //    [
   //       "nama" => "Son Seungwan",
   //       "nim" => "9101112",
   //       "email" => "wendy@gmail.com",
   //       "jurusan" => "teknik informatika"
   //    ]
   // ];




   // // menggunakan data dari database

   // // property untuk database handler
   // private $dbh;

   // // property untuk menyimpan query database
   // private $stmt;

   // public function __construct()
   // {
   //    $dsn = 'mysql:host=localhost;dbname=phpmvc';

   //    try {
   //       $this->dbh = new PDO($dsn, 'root', '');
   //    } catch (PDOException $e) {
   //       die($e->getMessage());
   //    }
   // }

   // public function getMhs()
   // {
   //    // mempersiapkan query
   //    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
   //    // mengeksekusi query
   //    $this->stmt->execute();
   //    // mengambil semua data yang ada di database (sesuai query yang dijalankan)
   //    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   // }
}
