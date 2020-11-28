<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		//panggil file index dalam folder user, dalam folder view
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['upload_path'] 	 = './assets/img/profile';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']      = '2048';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('image')) {
					//cari tau nama dari gambar sebelum di upload
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Profil Berhasil Diubah! </div>');
			redirect('user');
		}
	}
	public function daftarLomba()
	{
		$data['title'] = 'Daftar Lomba';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['lomba'] = $this->db->get('lomba')->result_array();
		$this->form_validation->set_rules('namatim', 'Nama Tim', 'required');
		$this->form_validation->set_rules('judul', 'Judul Proposal', 'required');
		$this->form_validation->set_rules('dosen', 'Dosen', 'required');
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim');
		$this->form_validation->set_rules('nama0', 'Nama Anggota 0', 'required');
		$this->form_validation->set_rules('nim0', 'NIM Anggota 0', 'required');
		$this->form_validation->set_rules('jurusan0', 'Jurusan Anggota 0', 'required');
		$this->form_validation->set_rules('nama1', 'Nama Anggota 1', 'required');
		$this->form_validation->set_rules('nim1', 'NIM Anggota 1', 'required');
		$this->form_validation->set_rules('jurusan1', 'Jurusan Anggota 1', 'required');
		$this->form_validation->set_rules('nama2', 'Nama Anggota 2', 'required');
		$this->form_validation->set_rules('nim2', 'NIM Anggota 2', 'required');
		$this->form_validation->set_rules('jurusan2', 'Jurusan Anggota 2', 'required');
		$this->form_validation->set_rules('id_lomba', 'id_lomba', 'required');
		$this->form_validation->set_rules('id_user', 'id_user', 'required');

		$this->load->model('Menu_model', 'menu');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('lomba/index', $data);
			$this->load->view('templates/footer');
		} else {
			$this->addTeam();
		}
	}
	private function addTeam()
	{
		$data = [
			'namatim' => $this->input->post('namatim'),
			'judul' => $this->input->post('judul'),
			'dosen' => $this->input->post('dosen'),
			'nip' => $this->input->post('nip'),
			'nama_ketua' => $this->input->post('nama0'),
			'nim0' => $this->input->post('nim0'),
			'jurusan0' => $this->input->post('jurusan0'),
			'nama1' => $this->input->post('nama1'),
			'nim1' => $this->input->post('nim1'),
			'jurusan1' => $this->input->post('jurusan1'),
			'nama2' => $this->input->post('namatim'),
			'nim2' => $this->input->post('nim2'),
			'jurusan2' => $this->input->post('jurusan2'),
			'id_lomba' => $this->input->post('id_lomba'),
			'id_user' => $this->input->post('id_user')
		];
		$this->db->insert('registered_team', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Tim Berhasil Didaftarkan! </div>');
		redirect('user/daftarLomba');
	}
	public function daftarPeserta()
	{
		$data['title'] = 'Daftar Peserta';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['id'] = $this->uri->segment(3);
		$data['lomba'] = $this->db->get_where('lomba', ['id' => $data['id']])->row_array();
		$this->load->model('Menu_model', 'menu');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('lomba/daftar_peserta', $data);
		$this->load->view('templates/footer');
	}
	// public function beranda()
	// {
	// 	$data['title'] = 'Beranda';
	// 	$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// 	$this->load->view('templates/topbar', $data);
	// 	$this->load->view('user/beranda', $data);
	// 	$this->load->view('templates/footer');
	// }
}
