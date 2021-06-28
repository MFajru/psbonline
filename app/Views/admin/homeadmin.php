<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content_admin'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Selamat Datang, <?= session()->get('name'); ?></h1>

    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Halaman Admin</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                    </div>
                    <p>Di halaman ini, admin dapat mengolola informasi pendaftaran dan informasi akun pendaftar</p>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->



<?= $this->endSection(); ?>