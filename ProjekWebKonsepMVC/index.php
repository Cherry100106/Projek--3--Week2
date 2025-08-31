<?php
include 'koneksi.php';
include 'controller/MahasiswaController.php';

$controller = new MahasiswaController($conn);
$page = $_GET['page'] ?? '';

switch($page){
    case 'detail':
        $controller->detail($_GET['nim']);
        break;
    case 'tambah':
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $controller->tambah($_POST);
        } else {
            include 'view/form.php';
        }
        break;
    case 'edit':
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $controller->edit($_POST);
        } else {
            $nim = $_GET['nim'];
            $mahasiswa = $controller->model->getByNim($nim);
            include 'view/form.php';
        }
        break;
    case 'hapus':
        $controller->hapus($_GET['nim']);
        break;
    default:
        $controller->index();
}
?>
