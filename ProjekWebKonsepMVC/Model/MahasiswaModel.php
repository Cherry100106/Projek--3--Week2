<?php
class MahasiswaModel {
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function getAll(){
        return $this->conn->query("SELECT * FROM mahasiswa ORDER BY nim ASC");
    }

    public function getByNim($nim){
        $res = $this->conn->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
        return $res->fetch_assoc();
    }

    public function insert($nim, $nama, $umur){
        $this->conn->query("INSERT INTO mahasiswa (nim,nama,umur) VALUES ('$nim','$nama','$umur')");
    }

    public function update($nim, $nama, $umur){
        $this->conn->query("UPDATE mahasiswa SET nama='$nama', umur='$umur' WHERE nim='$nim'");
    }

    public function delete($nim){
        $this->conn->query("DELETE FROM mahasiswa WHERE nim='$nim'");
    }
}
?>
