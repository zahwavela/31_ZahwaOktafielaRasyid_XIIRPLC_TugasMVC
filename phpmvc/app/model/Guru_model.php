<?php
class Guru_model
{

    private $table = 'data_guru';
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

    public function tambahData($data)
        {
            $query = " INSERT INTO guru VALUES 
            ('', :nama, :jurusan, :kode_guru )";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jurusan', $data['jurusan']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->execute();
            return $this->db->rowCount();
        }

    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM data_guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    // private $guru = [
    //     [
    //         "Nama" => "Vazel",
    //         "Jurusan" => "RPL",
    //         "Kode guru" => "0122333",
    //     ],
    //     [
    //         "Nama" => "flora",
    //         "Jurusan" => "Tata Boga",
    //         "Kode guru" => "0122444",
    //     ],
    //     [
    //         "Nama" => "rosa",
    //         "Jurusan" => "DPIB",
    //         "Kode guru" => "0122555",
    //     ]
    //     ];
    //     public function getAllGuru()
    //     {
    //         return $this->guru;
    //     }
}