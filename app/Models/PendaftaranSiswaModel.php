<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranSiswaModel extends Model
{
    protected $table = 'pendaftaransiswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_lengkap', 'email', 'jenis_kelamin', 'nisn', 'nik', 'tempat_lahir', 'tanggal_lahir', 'reg_akta_lahir', 'agama', 'warga_negara', 'alamat_jalan', 'rt', 'rw', 'dusun', 'kelurahan', 'kecamatan', 'kota', 'provinsi', 'kode_pos', 'status', 'nilai_matematika', 'nilai_binggris', 'gambar'];

    public function getDataPendaftaran($email = false)
    {
        if ($email == false) {
            return $this->findAll();
        }
        return $this->where(['email' => $email])->first();
    }
}
