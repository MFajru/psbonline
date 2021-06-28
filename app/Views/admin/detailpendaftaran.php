<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content_admin'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-11 mb-4">
            <form>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $datapendaftar['nama_lengkap'] ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Jenis kelamin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" value="<?= $datapendaftar['jenis_kelamin'] ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nisn" name="nisn" value="<?= $datapendaftar['nisn']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nik" class="col-sm-2 col-form-label">NIK/ No. KITAS</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nik" name="nik" value="<?= $datapendaftar['nik']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" value="<?= $datapendaftar['tempat_lahir']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" value="<?= $datapendaftar['tanggal_lahir']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="regaktalahir" class="col-sm-2 col-form-label">No. Registrasi Akta Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="regaktalahir" name="regaktalahir" value="<?= $datapendaftar['reg_akta_lahir']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="agama" name="agama" value="<?= $datapendaftar['agama']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="warganegara" class="col-sm-2 col-form-label">Warga Negara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="warganegara" name="warganegara" value="<?= $datapendaftar['warga_negara']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $datapendaftar['alamat_jalan']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="rt" class="col-sm-2 col-form-label">RT</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="rt" name="rt" value="<?= $datapendaftar['rt']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="rw" class="col-sm-2 col-form-label">RW</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="rw" name="rw" value="<?= $datapendaftar['rw']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dusun" name="dusun" value="<?= $datapendaftar['dusun']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan/ Desa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" value="<?= $datapendaftar['kelurahan']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $datapendaftar['kecamatan']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kota" class="col-sm-2 col-form-label">Kota/ Kabupaten</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kota" name="kota" value="<?= $datapendaftar['kota']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $datapendaftar['provinsi']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-5">
                    <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="kodepos" name="kodepos" value="<?= $datapendaftar['kode_pos']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-5">
                    <label for="nilaimatematika" class="col-sm-2 col-form-label">Nilai Matematika</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nilaimatematika" name="nilaimatematika" value="<?= $datapendaftar['nilai_matematika']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-5">
                    <label for="nilaibinggris" class="col-sm-2 col-form-label">Nilai Bahasa Inggris</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nilaibinggris" name="nilaibinggris" value="<?= $datapendaftar['nilai_binggris']; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-5">
                    <label for="inputfile" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <img src="/uploads/<?= $datapendaftar['gambar']; ?>" alt="gambar" width="250px" height="150px">
                    </div>
                </div>
                <a href="/informasipendaftaran" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>