<?= $this->extend('layout/template_pendaftar'); ?>

<?= $this->section('content_pendaftar'); ?>
<div class="container" style="margin-bottom: 30px;">
    <div class="row">
        <div class="col">
            <div class="container-form">
                <h5 class="h5-form">Form Pendaftaran Siswa Baru SMA di Bandar Lampung</h5>
                <p><b>Keterangan: Isikan strip(-), jika tidak ada isi.</b></p>
                <form method="POST" action="<?= base_url('Home/daftar'); ?>" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= session()->get('name'); ?>" required>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="lakilaki" value="Laki-laki" required>
                                <label class="form-check-label" for="lakilaki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nisn" name="nisn" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK/ No. KITAS</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nik" name="nik" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="regaktalahir" class="col-sm-2 col-form-label">No. Registrasi Akta Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="regaktalahir" name="regaktalahir" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="agama" class="col-sm-2 col-form-label">Agama & Kepercayaan</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="agama" id="agama" name="agama" required>
                                <option>Pilih agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <label class="col-form-label col-sm-2 pt-0">Warga Negara</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="warganegara" id="wni" value="WNI" required>
                                <label class="form-check-label" for="wni">
                                    Indonesia (WNI)
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="warganegara" id="wna" value="WNA">
                                <label class="form-check-label" for="wna">
                                    Asing (WNA)
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Jalan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="rt" class="col-sm-2 col-form-label">RT</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="rt" name="rt" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="rw" class="col-sm-2 col-form-label">RW</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="rw" name="rw" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dusun" class="col-sm-2 col-form-label">Dusun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="dusun" name="dusun" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan/ Desa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="kota" class="col-sm-2 col-form-label">Kota/ Kabupaten</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kota" name="kota" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="kodepos" name="kodepos" required>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="nilaimatematika" class="col-sm-2 col-form-label">Nilai Matematika</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nilaimatematika" name="nilaimatematika" required>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="nilaibinggris" class="col-sm-2 col-form-label">Nilai Bahasa Inggris</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nilaibinggris" name="nilaibinggris" required>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <label for="inputfile" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="inputfile" name="inputfile" required>
                        </div>
                    </div>
                    <?php if ($datapendaftar) : ?>
                        <button type="submit" class="btn btn-primary" disabled>Kirim</button>
                    <?php else : ?>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>