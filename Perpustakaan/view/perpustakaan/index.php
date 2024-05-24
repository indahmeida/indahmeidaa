<h1>Ini perpustakaan</h1>
<a href="<?= url("/perpustakaan/create") ?>" class="btn btn-success my-3">Tambah Data</a>
<table class="table table-bordered">
    <thead class="bg-primary  text-white">
        <tr>
            <th>ID</th>
            <th>Nama Peminjam</th>
            <th>Buku</th>
            <th>Peminjaman</th>
            <th>Pengembalian</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($perpustakaan as $k => $v) : ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['nama'] ?></td>
                <td><?= $v['buku'] ?></td>
                <td><?= $v['peminjaman'] ?></td>
                <td><?= $v['pengembalian'] ?></td>
                <td>
                    <a href="<?= url("/perpustakaan/show?id={$v['id']}") ?>" class="btn btn-sm btn-info">Detail</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-<?= $v['id'] ?>').submit();" class="btn btn-sm btn-danger">Delete</a>
                    <form id="delete-form-<?= $v['id'] ?>" action="<?= url("/perpustakaan/destroy?id={$v['id']}") ?>" method="POST" style="display: none;"></form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>