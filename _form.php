<?php if(!empty($error)): ?><div class="alert alert-danger"><?= e($error) ?></div><?php endif; ?>
<form method="POST">
<div class="mb-3"><label class="form-label">NIM *</label><input type="text" name="nim" class="form-control" value="<?= e($data['nim']) ?>" required></div>
<div class="mb-3"><label class="form-label">Nama *</label><input type="text" name="nama" class="form-control" value="<?= e($data['nama']) ?>" required></div>
<div class="mb-3"><label class="form-label">Jurusan *</label>
<select name="jurusan" class="form-select" required><option value="">-- Pilih --</option>
<?php foreach($daftar_jurusan as $j): ?><option value="<?= e($j) ?>" <?= $data['jurusan']==$j?'selected':'' ?>><?= e($j) ?></option><?php endforeach; ?>
</select></div>
<div class="mb-3"><label class="form-label">Email *</label><input type="email" name="email" class="form-control" value="<?= e($data['email']) ?>" required></div>
<div class="mb-3"><label class="form-label">No HP</label><input type="text" name="no_hp" class="form-control" value="<?= e($data['no_hp']) ?>"></div>
<button type="submit" class="btn btn-primary">Simpan</button> <a href="index.php" class="btn btn-secondary">Batal</a>
</form>