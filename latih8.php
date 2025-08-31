<?php
// konfigurasi koneksi
$host = "localhost";
$user = "root"; // ganti jika user MsSQL berbeda
$pass = ""; // ganti jika ada password
$db   = "akademik_db";

//koneksi ke database
$conn = new mysqli($host, $user, $pass, $db );

// cek Koneksi
if ($conn->connect_error){
    die("koneksi gagal: ". $conn->connect_error);
}

// Querry ambil semua data mahasiswa
$sql = "SELECT nim, nama, umur FROM mahasiswa ORDER BY nim ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
            <tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td> <a href="detail_mahasiswa.php?nim=<?= urlencode($row['nim']);?>">View Detail</a></td>
            <tr>
            <?php endwhile; ?>
            </table>
    <?php else: ?>
        <P> Tidak ada data mahasiswa. </p>
    <?php endif; ?>
</body>
</html>
<?php
$conn->close();
?>