<?= $this->extend('layout/template_pendaftar'); ?>

<?= $this->section('content_pendaftar'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="title-home">PENDAFTARAN SISWA BARU</h1>
            <h6 class="subtitle-home">SEKOLAH MENENGAH ATAS (SMA) XX Bandar Lampung</h6>
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
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pendaftaran Siswa Baru</h5>
                            <p>Bagi calon siswa yang ingin mendaftar, silahkan pilih "<b>Pendaftaran Siswa Baru</b>" pada navigation bar di atas atau klik <b>tombol di bawah ini</b>.</p>
                            <a class="btn btn-success" href="/pendaftaransiswa" role="button">Pendaftaran Siswa Baru</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cek Status Pendaftaran</h5>
                            <p>Bagi calon siswa yang ingin memeriksa status pendaftarannya, silahkan pilih "<b>Status Pendaftaran</b>" pada navigation bar di atas atau klik <b>tombol di bawah ini</b>.</p>
                            <a class="btn btn-success" href="/statuspendaftaran" role="button">Status Pendaftaran</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


</div>
<?= $this->endSection(); ?>