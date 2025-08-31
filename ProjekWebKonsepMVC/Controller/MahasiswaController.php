<?php
include 'model/MahasiswaModel.php';

class MahasiswaController {
    public $model;
    public function __construct($conn){
        $this->model = new MahasiswaModel($conn);
    }

    public function index(){
        $data = $this->model->getAll();
        include 'view/daftar.php';
    }

    public function detail($nim){
        $mahasiswa = $this->model->getByNim($nim);
        include 'view/detail.php';
    }

    public function tambah($post){
        $this->model->insert($post['nim'], $post['nama'], $post['umur']);
        header("Location: index.php");
    }

    public function edit($post){
        $this->model->update($post['nim'], $post['nama'], $post['umur']);
        header("Location: index.php");
    }

    public function hapus($nim){
        $this->model->delete($nim);
        header("Location: index.php");
    }
}
?>
