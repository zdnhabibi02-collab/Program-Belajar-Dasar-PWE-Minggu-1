<?php
require_once __DIR__ . '/koneksi.php';

$tab = $_GET['tab'] ?? 'matakuliah';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Kampus</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<main class="dashboard">
    <header class="page-header">
        <div>
            <p class="kepala">Sistem Informasi Kampus</p>
            <h1>KELOLA DATA KAMPUS</h1>
            <p class="paragraf">Kelola data matakuliah dan user dalam satu halaman.</p>
        </div>
    </header>

    <nav class="nav" aria-label="Navigasi data">
        <a href="index.php?tab=matakuliah" class="<?= $tab === 'matakuliah' ? 'active' : '' ?>">Matakuliah</a>
        <a href="index.php?tab=user" class="<?= $tab === 'user' ? 'active' : '' ?>">User</a>
    </nav>

    <section class="content-panel">
        <?php if ($tab === 'matakuliah'): ?>
            <h3>Data Matakuliah</h3>
            <a href="form_tambah.php?tipe=matakuliah" class="btn-tambah">+ Tambah Matakuliah</a>
            <div class="table-wrap"><table>
                <tr><th>Kode MK</th><th>Nama MK</th><th>SKS</th><th>Semester</th><th>Aksi</th></tr>
                <?php $query = mysqli_query($koneksi, 'SELECT * FROM matakuliah'); while ($data = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td><?= htmlspecialchars($data['Kode_MK']) ?></td>
                        <td><?= htmlspecialchars($data['Nama_MK']) ?></td>
                        <td><?= htmlspecialchars($data['SKS']) ?></td>
                        <td><?= htmlspecialchars($data['Semester']) ?></td>
                        <td>
                            <a href="formedit.php?tipe=matakuliah&id=<?= urlencode($data['Kode_MK']) ?>" class="btn-edit">Edit</a>
                            <a href="hapus.php?tipe=matakuliah&id=<?= urlencode($data['Kode_MK']) ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table></div>
        <?php else: ?>
            <h3>Data User</h3>
            <a href="form_tambah.php?tipe=user" class="btn-tambah">+ Tambah User</a>
            <div class="table-wrap"><table>
                <tr><th>ID</th><th>Nama Pengguna</th><th>Alamat</th><th>Username</th><th>Password</th><th>Aksi</th></tr>
                <?php $query = mysqli_query($koneksi, 'SELECT * FROM user'); while ($data = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td><?= htmlspecialchars($data['id']) ?></td>
                        <td><?= htmlspecialchars($data['Nama_pengguna']) ?></td>
                        <td><?= htmlspecialchars($data['alamat']) ?></td>
                        <td><?= htmlspecialchars($data['User_name']) ?></td>
                        <td><?= htmlspecialchars($data['Password']) ?></td>
                        <td>
                            <a href="formedit.php?tipe=user&id=<?= urlencode($data['id']) ?>" class="btn-edit">Edit</a>
                            <a href="hapus.php?tipe=user&id=<?= urlencode($data['id']) ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table></div>
        <?php endif; ?>
    </section>
</main>
</body>
</html>