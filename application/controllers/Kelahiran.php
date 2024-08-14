<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login') == FALSE) {
            redirect(base_url("login"));
        }
        $this->load->model('m_kelahiran');
    }

    public function tampil()
    {
        $data['title'] = "Data kelahiran - NAGARI KOTO NAN DUO";
        $data['kelahiran'] = $this->m_kelahiran->tampil();
        
        $this->load->view('header', $data);
        $this->load->view('kelahiran/tampil_kelahiran');
        $this->load->view('footer');
    }

    public function tampil_kelahiran()
    {
        $data['title'] = "Data kelahiran - NAGARI KOTO NAN DUO";
        $data['kelahiran'] = $this->m_kelahiran->tampil();

        $this->load->view('header', $data);
        $this->load->view('kelahiran/tampil_kelahiran2');
        $this->load->view('footer');
    }
    
    public function tambah()
    {
        $data['title'] = "Tambah kelahiran - NAGARI KOTO NAN DUO";

        $this->load->view('header', $data);
        $this->load->view('kelahiran/tambah_kelahiran');
        $this->load->view('footer');
    }

    public function proses_tambah()
    {
        $id_kelahiran = $this->input->post('id_kelahiran');
        $nama = $this->input->post('nama');
        $hari = $this->input->post('hari');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $pukul = $this->input->post('pukul');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $nama_ayah = $this->input->post('nama_ayah');
        $pekerjaan_ayah = $this->input->post('pekerjaan_ayah');  // Field baru
        $nama_ibu = $this->input->post('nama_ibu');
        $pekerjaan_ibu = $this->input->post('pekerjaan_ibu');  // Field baru
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => ucwords($nama),
            'hari' => ucwords($hari),
            'tempat_lahir' => ucwords($tempat_lahir),
            'tanggal_lahir' => $tanggal_lahir,
            'pukul' => $pukul,
            'jenis_kelamin' => $jenis_kelamin,
            'nama_ayah' => ucwords($nama_ayah),
            'pekerjaan_ayah' => ucwords($pekerjaan_ayah),  // Field baru
            'nama_ibu' => ucwords($nama_ibu),
            'pekerjaan_ibu' => ucwords($pekerjaan_ibu),  // Field baru
            'alamat' => ucwords($alamat),
        );

        $this->m_kelahiran->tambah($data);

        $this->session->set_flashdata('sukses', 'Data dengan ID ' . $id_kelahiran . ' berhasil ditambahkan.');
        redirect(base_url('kelahiran/tampil'));
    }

    public function edit($id_kelahiran)
    {
        $data['title'] = "Edit kelahiran - NAGARI KOTO NAN DUO";
        $data['kelahiran'] = $this->m_kelahiran->edit($this->uri->segment(3));

        $this->load->view('header', $data);
        $this->load->view('kelahiran/edit_kelahiran');
        $this->load->view('footer');
    }

    public function proses_edit()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'hari' => $this->input->post('hari'),
            'tempat_lahir' =>  $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'pukul' =>  $this->input->post('pukul'),
            'jenis_kelamin' =>   $this->input->post('jenis_kelamin'),
            'nama_ayah' =>  $this->input->post('nama_ayah'),
            'pekerjaan_ayah' =>  $this->input->post('pekerjaan_ayah'),  // Field baru
            'nama_ibu' =>  $this->input->post('nama_ibu'),
            'pekerjaan_ibu' =>  $this->input->post('pekerjaan_ibu'),  // Field baru
            'alamat' => $this->input->post('alamat'),
        );

        $where = array(
            'id_kelahiran' => $this->input->post('id'),
        );

        $this->m_kelahiran->proses_edit($where, $data);
        $this->session->set_flashdata('sukses', 'Data berhasil diedit.');
        redirect(base_url('kelahiran/tampil'));
    }

    public function hapus($id_kelahiran)
    {
        $this->m_kelahiran->hapus($id_kelahiran);
        $this->session->set_flashdata('sukses', 'Data dengan id_kelahiran ' . $id_kelahiran . ' berhasil dihapus.');
        redirect(base_url('kelahiran/tampil'));
    }

    public function detail($id_kelahiran)
    {
        $data['title'] = "Detail kelahiran - NAGARI KOTO NAN DUO";
        $this->load->model('m_kelahiran');
        $detail = $this->m_kelahiran->detail($id_kelahiran);
        $data['detail'] = $detail;
        $this->load->view('header', $data);
        $this->load->view('kelahiran/detail_kelahiran', $data);
        $this->load->view('footer');
    }
}
