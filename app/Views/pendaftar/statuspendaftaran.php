<?= $this->extend('layout/template_pendaftar'); ?>

<?= $this->section('content_pendaftar'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="title-home">STATUS PENDAFTARAN</h1><br>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h5>Selamat Datang, <?= session()->get('name'); ?></h5>
            <div class="img-container-pendaftar">
                <img src="img/psb_online.jpg" alt="PSB Online">
            </div>
            <p class="paragraph-home">Situs ini dipersiapkan sebagai layanan sistem informasi PPDB Online atau PSB Online jenjang sekolah SD, SMP, SMA, dan SMK di wilayah Dinas Pendidikan dan Kebudayaan Republik Indonesia.</p>
            <div class="row align-items-start">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Status Pendaftaran Anda</h5>
                        <?php if ($pendaftaransiswa == null) : ?>
                            <p>Siswa Belum Mendaftar</p>
                        <?php endif; ?>
                        <p><?= $pendaftaransiswa['status']; ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>