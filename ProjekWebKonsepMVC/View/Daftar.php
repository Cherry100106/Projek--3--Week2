<!DOCTYPE html>
<html>
<body>

<h2>Daftar Mahasiswa</h2>

<form method="get" action="">
        <input type="text" name="keyword" placeholder="Cari NIM atau Nama" value="<?= $_GET['keyword'] ?? '' ?>">
        <button type="submit">Cari</button>
    </form><br>
<table border="1" cellpadding="5">
<tr>
    <th>NO</th>
    <th>ID</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Umur</th>
    <th>Aksi</th>
</tr>
<?php $no = 1; ?>
<?php while($row = $data->fetch_assoc()): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['id'] ?></td>
    <td><?= $row['nim'] ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['umur'] ?></td>
    <td>
        <a href="index.php?page=edit&nim=<?= $row['nim'] ?>">Edit</a> |
        <a href="index.php?page=hapus&nim=<?= $row['nim'] ?>" onclick="return confirm('Yakin?')">Hapus</a> |
        <a href="index.php?page=detail&nim=<?= $row['nim'] ?>" target="_blank">Detail</a>
    </td>
</tr>
<?php endwhile; ?>
</table> <br>
<button onclick="window.location='index.php?page=tambah'">Tambah Mahasiswa</button>
</body>
</html>