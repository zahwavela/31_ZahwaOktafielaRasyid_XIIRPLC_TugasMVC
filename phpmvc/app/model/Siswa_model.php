<?php
class Siswa_model
{
    private $table = 'data_siswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    
    // private $siswa = [
    //     [
    //         "nama" => "Yura",
    //         "jenis_kelamin" => "perempuan",
    //         "alamat" => "sumbergedong",
    //     ],
    //     [
    //         "nama" => "Niko",
    //         "jenis_kelamin" => "laki-laki",
    //         "alamat" => "tamanan",
    //     ],
    //     [
    //         "nama" => "Dyora",
    //         "jenis_kelamin" => "perempuan",
    //         "alamat" => "dawuhan",
    //     ]
    //     ];
    //     public function getAllSiswa()
    //     {
    //         return $this->siswa;
    //     }

    public function tambahData($data)
        {
            $query = " INSERT INTO siswa VALUES 
            ('', :nama, :jenis_kelamin, :alamat )";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->execute();
            return $this->db->rowCount();
        }

    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM data_siswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}