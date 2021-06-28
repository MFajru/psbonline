<?php

namespace App\Controllers;

use App\Models\PendaftaranSiswaModel;
use App\Models\UsersModel;
use Pdf;
use TCPDF;

class Home extends BaseController
{
	protected $pendaftaranSiswaModel;
	protected $usersModel;
	// protected $load;
	public function __construct()
	{
		helper(['form', 'url']);
		$this->pendaftaranSiswaModel = new PendaftaranSiswaModel();
		$this->usersModel = new UsersModel();
	}

	public function index()
	{
		return view('welcome_message');
	}

	//method menampilkan halaman pendaftar
	public function pendaftar()
	{
		$data = [
			'title' => 'Home | PSB Online'
		];
		return view('pendaftar/homependaftar', $data);
	}

	//method menampilkan halaman pendaftaran untuk calon siswa
	public function pendaftaransiswa()
	{
		$sessionEmail = session()->get('email');
		$sudahDaftar = $this->pendaftaranSiswaModel->getDataPendaftaran($sessionEmail);
		$data = [
			'title' => 'Pendaftaran Siswa | PSB Online',
			'datapendaftar' => $sudahDaftar
		];

		if ($sudahDaftar) {
			return view('pendaftar/sudahdaftar', $data);
		} else {
			return view('pendaftar/pendaftaransiswa', $data);
		}
	}

	//method untuk menyimpan data ke database
	public function daftar()
	{

		$input = $this->validate([
			'inputfile' => [
				'uploaded[inputfile]',
				'mime_in[inputfile,image/jpg,image/jpeg,image/png]',
				'max_size[inputfile,1024]',
			]
		]);
		if (!$input) {
			print_r('Choose a valid file');
		} else {
			$img = $this->request->getFile('inputfile');
			$img->move('uploads');
			$sessionEmail = session()->get('email');
			$this->pendaftaranSiswaModel->save([
				'nama_lengkap' => $this->request->getVar('name'),
				'email' => $sessionEmail,
				'jenis_kelamin' => $this->request->getVar('jeniskelamin'),
				'nisn' => $this->request->getVar('nisn'),
				'nik' => $this->request->getVar('nik'),
				'tempat_lahir' => $this->request->getVar('tempatlahir'),
				'tanggal_lahir' => $this->request->getVar('tanggallahir'),
				'reg_akta_lahir' => $this->request->getVar('regaktalahir'),
				'agama' => $this->request->getVar('agama'),
				'warga_negara' => $this->request->getVar('warganegara'),
				'alamat_jalan' => $this->request->getVar('alamat'),
				'rt' => $this->request->getVar('rt'),
				'rw' => $this->request->getVar('rw'),
				'dusun' => $this->request->getVar('dusun'),
				'kelurahan' => $this->request->getVar('kelurahan'),
				'kecamatan' => $this->request->getVar('kecamatan'),
				'kota' => $this->request->getVar('kota'),
				'provinsi' => $this->request->getVar('provinsi'),
				'kode_pos' => $this->request->getVar('kodepos'),
				'status' => "Belum Diperiksa",
				'nilai_matematika' => $this->request->getVar('nilaimatematika'),
				'nilai_binggris' => $this->request->getVar('nilaibinggris'),
				'gambar' => $img->getName(),

			]);
			session()->setFlashdata('pesan', 'Data berhasil didaftarkan.');
			return redirect()->to('/pendaftar');
		}
	}

	//method menampilkan halaman status pendaftaran untuk calon siswa
	public function statuspendaftaran()
	{
		$sessionEmail = session()->get('email');
		$data = [
			'title' => 'Status Pendaftaran | PSB Online',
			'pendaftaransiswa' => $this->pendaftaranSiswaModel->getDataPendaftaran($sessionEmail)
		];

		return view('pendaftar/statuspendaftaran', $data);
	}

	//method menampilkan halaman admin
	public function admin()
	{
		$data = [
			'title' => 'Admin | PSB Online',
		];
		return view('admin/homeadmin', $data);
	}

	//method untuk menampilkan halaman informasi pendaftar pada user admin
	public function informasipendaftaran()
	{
		$data = [
			'title' => 'Informasi Pendaftaran | PSB Online',
			'datapendaftar' => $this->pendaftaranSiswaModel->getDataPendaftaran()
		];

		return view('admin/informasipendaftaran', $data);
	}

	//method menampilkan halaman detail pendaftaran pada user admin
	public function detailpendaftaran($email)
	{
		$data = [
			'title' => 'Informasi Pendaftaran | PSB Online',
			'datapendaftar' => $this->pendaftaranSiswaModel->getDataPendaftaran($email)
		];

		return view('admin/detailpendaftaran', $data);
	}

	//method edit status pendaftaran menjadi diterima
	public function statusditerima($id)
	{
		$this->pendaftaranSiswaModel->save([
			'id' => $id,
			'status' => "Diterima"
		]);

		return redirect()->to('/informasipendaftaran');
	}

	//method edit status pendaftaran menjadi cadangan
	public function statuscadangan($id)
	{
		$this->pendaftaranSiswaModel->save([
			'id' => $id,
			'status' => "Cadangan"
		]);

		return redirect()->to('/informasipendaftaran');
	}

	//method edit status pendaftaran menjadi tidak diterima
	public function statusTterima($id)
	{
		$this->pendaftaranSiswaModel->save([
			'id' => $id,
			'status' => "Tidak Diterima"
		]);

		return redirect()->to('/informasipendaftaran');
	}

	//method menampilkan halaman informasi akun pada user admin
	public function informasiakun()
	{
		$data = [
			'title' => 'Informasi Akun | PSB Online',
			'dataakun' => $this->usersModel->getUsers()
		];

		return view('/admin/informasiakun', $data);
	}

	//method menghapus akun yang dilakukan oleh admin
	public function delete($id)
	{
		$this->usersModel->delete($id);
		return redirect()->to('/informasiakun');
	}

	public function cetak()
	{
		$sessionEmail = session()->get('email');
		$data = [
			'title' => "Cetak",
			'datapendaftar' => $this->pendaftaranSiswaModel->getDataPendaftaran($sessionEmail)
		];

		$html = view('pendaftar/printform', $data);

		$pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);
		$pdf->setCreator(PDF_CREATOR);
		$pdf->SetAuthor('PSB Online');
		$pdf->SetTitle('Form Pendaftar');
		$pdf->SetSubject('Form Pendaftar');
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		$pdf->addPage();

		$pdf->writeHTML($html, true, false, true, false, '');
		$this->response->setContentType('application/pdf');
		$pdf->Output('form.pdf', 'I');
	}
}
