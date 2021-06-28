<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content_admin'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col mb-4">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Waktu Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dataakun as $akun) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $akun['name']; ?></td>
                            <td><?= $akun['email']; ?></td>
                            <td><?= $akun['role']; ?></td>
                            <td><?= $akun['created_at']; ?></td>
                            <td>
                                <?php if ($akun['role'] == 'pendaftar') : ?>
                                    <form action="/informasiakun/delete/<?= $akun['id']; ?>" method="POST" class="d-inline">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm ('Hapus data ini?');">Hapus</button>
                                    </form>
                                <?php else : ?>
                                    <input type="hidden">
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?= $this->endSection(); ?>