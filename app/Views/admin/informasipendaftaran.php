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
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Status Pendaftaran</th>
                        <th scope="col">Ubah Status Pendaftaran</th>
                        <th scope="col">Detail Pendaftaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($datapendaftar as $pendaftar) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $pendaftar['nama_lengkap']; ?></td>
                            <td><?= $pendaftar['jenis_kelamin']; ?></td>
                            <td><?= $pendaftar['nisn']; ?></td>
                            <td><?= $pendaftar['status']; ?></td>
                            <td><a class="btn btn-success" href="/home/statusditerima/<?= $pendaftar['id']; ?>" style="margin-right: 10px;" onclick="return confirm ('Terima data ini?');">Diterima</a>
                                <a class="btn btn-warning" href="/home/statuscadangan/<?= $pendaftar['id']; ?>" style="margin-right: 10px;" onclick="return confirm ('Jadikan data ini sebagai cadangan?');">Cadangan</a>
                                <a class="btn btn-danger" href="/home/statusTterima/<?= $pendaftar['id']; ?>" onclick="return confirm ('Tolak data ini?');">Tidak Diterima</a>
                            </td>
                            <td><a href="/detailpendaftaran/<?= $pendaftar['email']; ?>">Detail</a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->


<?= $this->endSection(); ?>