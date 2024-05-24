<h1>Edit Data perpustakaan</h1>
<form action="<?= url("/perpustakaan/update?id={$perpustakaan['id']}") ?>" method="POST">
        <div class="row">
            <div class="col-4 form-group">
                <label>Nama Peminjam</label>
                <!-- Input untuk nama mahasiswa dengan nilai awal dari database -->
                <input type="text" class="form-control" name="nama" value="<?= $perpustakaan['nama'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Buku</label>
                <!-- Input untuk tahun lulus dengan nilai awal dari database -->
                <input type="text" class="form-control" name="buku" value="<?= $perpustakaan['buku'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>peminjaman</label>
                <!-- Input untuk instansi dengan nilai awal dari database -->
                <input type="date" class="form-control" name="peminjaman" value="<?= $perpustakaan['peminjaman'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>pengembalian</label>
                <!-- Input untuk instansi dengan nilai awal dari database -->
                <input type="date" class="form-control" name="pengembalian" value="<?= $perpustakaan['pengembalian'] ?>">
            </div>
        </div>
    
    <a href="<?= url("/perpustakaan/show?id={$perpustakaan['id']}") ?>" class="btn btn-secondary">Kembali</a>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>