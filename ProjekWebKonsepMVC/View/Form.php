<h2><?= isset($mahasiswa) ? "Edit" : "Tambah" ?> Mahasiswa</h2>
<form method="post" action="index.php?page=<?= isset($mahasiswa) ? "edit" : "tambah" ?>">
    NIM: <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?? '' ?>" <?= isset($mahasiswa) ? 'readonly' : '' ?> required><br>
    Nama: <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?? '' ?>" required><br>
    Umur: <input type="number" name="umur" value="<?= $mahasiswa['umur'] ?? '' ?>" required><br>
    <input type="submit" value="<?= isset($mahasiswa) ? "Update" : "Tambah" ?>">
</form>
<a href="index.php">Kembali</a>
