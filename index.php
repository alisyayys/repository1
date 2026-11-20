<?php include 'header.php';
$cari = trim($_GET['cari'] ?? '');
if($cari!==''){ $stmt=mysqli_prepare($koneksi,"SELECT * FROM mahasiswa WHERE nama LIKE ? OR nim LIKE ? ORDER BY id DESC"); $like="%$cari%"; mysqli_stmt_bind_param($stmt,"ss",$like,$like); mysqli_stmt_execute($stmt); $result=mysqli_stmt_get_result($stmt); }
else { $result=mysqli_query($koneksi,"SELECT * FROM mahasiswa ORDER BY id DESC"); }
?>
<div class="card shadow-sm border-0"><div class="card-header bg-white py-3 d-flex justify-content-between"><h5 class="mb-0 fw-semibold">Data Mahasiswa</h5><a href="tambah.php" class="btn btn-primary btn-sm">+ Tambah</a></div><div class="card-body">
<form class="row g-2 mb-3"><div class="col"><input type="text" name="cari" class="form-control" placeholder="Cari nama / NIM..." value="<?= e($cari) ?>"></div><div class="col-auto"><button class="btn btn-outline-primary">Cari</button></div></form>
<div class="table-responsive"><table class="table table-striped table-hover"><thead><tr><th>#</th><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Email</th><th>No HP</th><th>Aksi</th></tr></thead><tbody>
<?php $no=1; if(mysqli_num_rows($result)>0): while($r=mysqli_fetch_assoc($result)): ?>
<tr><td><?= $no++ ?></td><td><span class="badge bg-secondary"><?= e($r['nim']) ?></span></td><td><?= e($r['nama']) ?></td><td><?= e($r['jurusan']) ?></td><td><?= e($r['email']) ?></td><td><?= e($r['no_hp']) ?></td>
<td><a href="edit.php?id=<?= $r['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
<form method="POST" action="hapus.php" class="d-inline" onsubmit="return confirm('Yakin hapus?')"><input type="hidden" name="id" value="<?= $r['id'] ?>"><button class="btn btn-danger btn-sm">Hapus</button></form></td></tr>
<?php endwhile; else: ?><tr><td colspan="7" class="text-center">Belum ada data.</td></tr><?php endif; ?>
</tbody></table></div></div></div>
<?php include 'footer.php'; ?>