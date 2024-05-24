<h1>Tambah Data perpustakaan</h1>
<form action="<?= url("/perpustakaan") ?>" method="POST">
        <div class="row">
            <div class="col-4 form-group">
                <label>Nama peminjam</label>
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Buku</label>
                <input type="text" class="form-control" name="buku">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Peminjaman</label>
                <input type="date" class="form-control" name="peminjaman">
            </div>
        </div>
        <div class="row">
            <div class="col-4 form-group">
                <label>Pengembalian</label>
                <input type="text" class="form-control" name="pengembalian">
            </div>
        </div>
        
    <a href="<?= url("/perpustakaan") ?>" class="btn btn-secondary">Kembali</a>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>