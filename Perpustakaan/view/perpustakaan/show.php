<h1>Detail Data perpustakaan</h1>

<table class="table table-bordered w-50">
        <tr>
            <td>
                Nama Peminjam
            </td>
            <td>
                <!-- Menampilkan Nama -->
                <?= $perpustakaan['nama'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Buku
            </td>
            <td>
                <!-- Menampilkan Buku -->
                <?= $perpustakaan['buku'] ?>
            </td>
        </tr>
        <tr>
            <td>
                peminjaman
            </td>
            <td>
                <!-- Menampilkan Peminjaman -->
                <?= $perpustakaan['peminjaman'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Pengembalian
            </td>
            <td>
                <!-- Menampilkan Pengembalian -->
                <?= $perpustakaan['pengembalian'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Created At
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $perpustakaan['created_at'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Last Update
            </td>
            <td>
                <!-- Menampilkan Harga Sewa -->
                <?= $perpustakaan['updated_at'] ?>
            </td>
        </tr>
    </table>

<a href="<?= url("/perpustakaan") ?>" class="btn btn-secondary">Kembali</a>
<a href="<?= url("/perpustakaan/edit?id={$perpustakaan['id']}") ?>" class="btn btn-primary">Edit</a>