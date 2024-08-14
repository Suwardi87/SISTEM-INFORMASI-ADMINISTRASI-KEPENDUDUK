<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
		$this->load->model('m_domisili');
		$this->load->model('m_cerai_mati');
		$this->load->model('m_belum_menikah');
		$this->load->model('m_menikah');
		$this->load->model('m_belum_sekolah');
		$this->load->model('m_surat_pindah');
		$this->load->model('m_batal_pindah');
		$this->load->model('m_haji');
		$this->load->model('m_skck');
		$this->load->model('m_usaha');
		$this->load->model('m_sktm_pendidikan');
		$this->load->model('m_sktm_kesehatan');
		$this->load->model('m_surat_kelahiran');
		$this->load->model('m_surat_kematian');
		$this->load->model('m_izin_keluarga');
		$this->load->model('m_penghasilan');
		$this->load->model('m_pemakaman');
		$this->load->model('m_penduduk');
	}
	public function pindah()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_pindah')) {
				$data = array(
					'nik_kepala_keluarga' => $this->input->post('nik_kepala'),
					'nik_pemohon' => $this->input->post('nik_pemohon'),
					'alasan_pindah' => $this->input->post('alasan'),
					'alamat_pindah' => $this->input->post('alamat'),
					'rt_pindah' => $this->input->post('rt'),
					'rw_pindah' => $this->input->post('rw'),
					'dusun_pindah' => $this->input->post('dusun'),
					'desa_pindah' => $this->input->post('desa'),
					'kecamatan_pindah' => $this->input->post('kecamatan'),
					'kabupaten_pindah' => $this->input->post('kabupaten'),
					'provinsi_pindah' => $this->input->post('provinsi'),
					'kode_pos_pindah' => $this->input->post('kode_pos'),
					'telepon_pindah' => $this->input->post('telepon'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_pindah' => date('Y-m-d'),
				);
				$this->m_surat_pindah->tambah_pindah($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/pindah/'));
			} else {
				$data['title'] = "Surat Pindah - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_pindah->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_pindah', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_pindah')) {
				$data = array(
					'nik_kepala_keluarga' => $this->input->post('nik_kepala'),
					'nik_pemohon' => $this->input->post('nik_pemohon'),
					'alasan_pindah' => $this->input->post('alasan'),
					'alamat_pindah' => $this->input->post('alamat'),
					'rt_pindah' => $this->input->post('rt'),
					'rw_pindah' => $this->input->post('rw'),
					'dusun_pindah' => $this->input->post('dusun'),
					'desa_pindah' => $this->input->post('desa'),
					'kecamatan_pindah' => $this->input->post('kecamatan'),
					'kabupaten_pindah' => $this->input->post('kabupaten'),
					'provinsi_pindah' => $this->input->post('provinsi'),
					'kode_pos_pindah' => $this->input->post('kode_pos'),
					'telepon_pindah' => $this->input->post('telepon'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_pindah' => date('Y-m-d'),
				);
				$where = array(
					'id_pindah' => $this->input->post('id'),
				);
				$this->m_surat_pindah->proses_edit_pindah($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/pindah/'));
			} else {
				$data['title'] = "Surat Pindah - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_pindah->pejabat();
				$data['pindah'] = $this->m_surat_pindah->edit_pindah($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_pindah', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['pindah'] = $this->m_surat_pindah->cetak_pindah($this->uri->segment('4'));
			$this->load->view('surat/cetak_pindah', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_surat_pindah->hapus_pindah($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/pindah'));
		} else {
			$data['title'] = "Surat Pindah - NAGARI KOTO NAN DUO";
			$data['surat'] = $this->m_surat_pindah->daftar_pindah();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_pindah');
			$this->load->view('footer');
		}
	}
	public function domisili()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_domisili')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'no_surat_rt' => $this->input->post('pengantar'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_domisili' => date('Y-m-d'),
				);
				$this->m_domisili->tambah_domisili($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/domisili/'));
			} else {
				$data['title'] = "Surat Keterangan Domisili - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_domisili->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_domisili', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_domisili')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'no_surat_rt' => $this->input->post('pengantar'),
				);
				$where = array(
					'id_domisili' => $this->input->post('id'),
				);
				$this->m_domisili->proses_edit_domisili($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/domisili/'));
			} else {
				$data['title'] = "Surat Keterangan Domisili - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_domisili->pejabat();
				$data['domisili'] = $this->m_domisili->edit_domisili($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_domisili', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['domisili'] = $this->m_domisili->cetak_domisili($this->uri->segment('4'));
			$this->load->view('surat/cetak_domisili', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_domisili->hapus_domisili($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/domisili'));
		} else {
			$data['title'] = "Surat Keterangan Domisili - NAGARI KOTO NAN DUO";
			$data['surat'] = $this->m_domisili->daftar_domisili();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_domisili');
			$this->load->view('footer');
		}
	}


	public function skck()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_skck')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'tanggal_skck' => date('Y-m-d'),
				);
				$this->m_skck->tambah_skck($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/skck/'));
			} else {
				$data['title'] = "Surat Keterangan SKCK - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_skck->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_skck', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_skck')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
				);
				$where = array(
					'id_skck' => $this->input->post('id'),
				);
				$this->m_skck->proses_edit_skck($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/skck/'));
			} else {
				$data['title'] = "Surat Keterangan SKCK -NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_skck->pejabat();
				$data['skck'] = $this->m_skck->edit_skck($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_skck', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['skck'] = $this->m_skck->cetak_skck($this->uri->segment('4'));
			$this->load->view('surat/cetak_skck', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_skck->hapus_skck($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/skck'));
		} else {
			$data['title'] = "Surat Keterangan SKCK - NAGARI KOTO NAN DUO";
			$data['surat'] = $this->m_skck->daftar_skck();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_skck');
			$this->load->view('footer');
		}
	}

	public function usaha()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_usaha')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'nama_usaha' => $this->input->post('nama'),
					'sejak_usaha' => $this->input->post('sejak'),
					'tanggal_usaha' => date('Y-m-d'),
				);
				$this->m_usaha->tambah_usaha($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/usaha/'));
			} else {
				$data['title'] = "Surat Keterangan Usaha - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_usaha->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_usaha', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_usaha')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'id_pejabat' => $this->input->post('pejabat'),
					'nama_usaha' => $this->input->post('nama'),
					'sejak_usaha' => $this->input->post('sejak'),
				);
				$where = array(
					'id_usaha' => $this->input->post('id'),
				);
				$this->m_usaha->proses_edit_usaha($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/usaha/'));
			} else {
				$data['title'] = "Surat Keterangan Usaha - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_usaha->pejabat();
				$data['usaha'] = $this->m_usaha->edit_usaha($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_usaha', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['usaha'] = $this->m_usaha->cetak_usaha($this->uri->segment('4'));
			$this->load->view('surat/cetak_usaha', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_usaha->hapus_usaha($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/usaha'));
		} else {
			$data['title'] = "Surat Keterangan Usaha - NAGARI KOTO NAN DUO";
			$data['surat'] = $this->m_usaha->daftar_usaha();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_usaha');
			$this->load->view('footer');
		}
	}
	public function surat_kelahiran()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_surat_kelahiran')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_ibu' => $this->input->post('ibu'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'nama_anak' => $this->input->post('nama'),
					'kelamin_anak' => $this->input->post('kelamin'),
					'tempat_lahir_anak' => $this->input->post('tempat'),
					'tanggal_lahir_anak' => $this->input->post('tanggal'),
					'jam_lahir_anak' => $this->input->post('jam'),
					'hari_lahir_anak' => $this->input->post('hari'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
					'tanggal_surat_kelahiran' => date('Y-m-d'),
				);
				$this->m_surat_kelahiran->tambah_surat_kelahiran($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/surat_kelahiran/'));
			} else {
				$data['title'] = "Surat Kelahiran - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kelahiran->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_surat_kelahiran', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_surat_kelahiran')) {
				$data = array(
					'nik_ayah' => $this->input->post('ayah'),
					'nik_ibu' => $this->input->post('ibu'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'nama_anak' => $this->input->post('nama'),
					'kelamin_anak' => $this->input->post('kelamin'),
					'tempat_lahir_anak' => $this->input->post('tempat'),
					'tanggal_lahir_anak' => $this->input->post('tanggal'),
					'jam_lahir_anak' => $this->input->post('jam'),
					'hari_lahir_anak' => $this->input->post('hari'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
				);
				$where = array(
					'id_surat_kelahiran' => $this->input->post('id'),
				);
				$this->m_surat_kelahiran->proses_edit_surat_kelahiran($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/surat_kelahiran/'));
			} else {
				$data['title'] = "Surat Kelahiran - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kelahiran->pejabat();
				$data['surat_kelahiran'] = $this->m_surat_kelahiran->edit_surat_kelahiran($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_surat_kelahiran', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['surat_kelahiran'] = $this->m_surat_kelahiran->cetak_surat_kelahiran($this->uri->segment('4'));
			$this->load->view('surat/cetak_surat_kelahiran', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_surat_kelahiran->hapus_surat_kelahiran($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/surat_kelahiran'));
		} else {
			$data['title'] = "Surat Kelahiran - NAGARI KOTO NAN DUO";
			$data['surat'] = $this->m_surat_kelahiran->daftar_surat_kelahiran();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_surat_kelahiran');
			$this->load->view('footer');
		}
	}

	public function surat_kematian()
	{
		if ($this->uri->segment('3') == "tambah") {
			if ($this->input->post('tambah_surat_kematian')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'umur_pelapor' => $this->input->post('umur'),
					'tempat_kematian' => $this->input->post('tempat'),
					'tanggal_kematian' => $this->input->post('tanggal'),
					'jam_kematian' => $this->input->post('jam'),
					'hari_kematian' => $this->input->post('hari'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
					'tanggal_surat_kematian' => date('Y-m-d'),
				);
				$this->m_surat_kematian->tambah_surat_kematian($data);
				$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan.');
				redirect(base_url('surat/surat_kematian/'));
			} else {
				$data['title'] = "Surat Kematian - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kematian->pejabat();
				$this->load->view('header', $data);
				$this->load->view('surat/tambah_surat_kematian', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "edit") {
			if ($this->input->post('edit_surat_kematian')) {
				$data = array(
					'nik' => $this->input->post('nik'),
					'nik_pelapor' => $this->input->post('pelapor'),
					'umur_pelapor' => $this->input->post('umur'),
					'tempat_kematian' => $this->input->post('tempat'),
					'tanggal_kematian' => $this->input->post('tanggal'),
					'jam_kematian' => $this->input->post('jam'),
					'hari_kematian' => $this->input->post('hari'),
					'id_pejabat' => $this->input->post('pejabat'),
					'hubungan_sebagai' => $this->input->post('hubungan'),
				);
				$where = array(
					'id_surat_kematian' => $this->input->post('id'),
				);
				$this->m_surat_kematian->proses_edit_surat_kematian($where, $data);
				$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
				redirect(base_url('surat/surat_kematian/'));
			} else {
				$data['title'] = "Surat Kematian - NAGARI KOTO NAN DUO";
				$data['penduduk'] = $this->m_penduduk->tampil();
				$data['pendudukkk'] = $this->m_penduduk->tampil();
				$data['pejabat'] = $this->m_surat_kematian->pejabat();
				$data['surat_kematian'] = $this->m_surat_kematian->edit_surat_kematian($this->uri->segment('4'));
				$this->load->view('header', $data);
				$this->load->view('surat/edit_surat_kematian', $data);
				$this->load->view('footer');
			}
		} elseif ($this->uri->segment('3') == "cetak") {
			$data['surat_kematian'] = $this->m_surat_kematian->cetak_surat_kematian($this->uri->segment('4'));
			$this->load->view('surat/cetak_surat_kematian', $data);
		} elseif ($this->uri->segment('3') == "hapus") {
			$this->m_surat_kematian->hapus_surat_kematian($this->uri->segment('4'));
			$this->session->set_flashdata('sukses', 'Data berhasil dihapus.');
			redirect(base_url('surat/surat_kematian'));
		} else {
			$data['title'] = "Surat Kematian - NAGARI KOTO NAN DUO";
			$data['surat'] = $this->m_surat_kematian->daftar_surat_kematian();
			$mutasi = $this->load->view('header', $data);
			$this->load->view('surat/daftar_surat_kematian');
			$this->load->view('footer');
		}
	}

}