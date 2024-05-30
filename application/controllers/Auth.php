<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	protected $title = "Your App";

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_user');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Login User";

		if ($this->session->userdata('email')) {
			redirect('dashboard');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login', $data);
		} else {
			// validasinya success
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['email' => $email])->row_array();

		// jika usernya ada
		if ($user) {

			//cek password
			if (password_verify($password, $user['password'])) {

				$data = [
					'id' => $user['id'],
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
                    role="alert"> Wrong password </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" 
            role="alert"> Email is not registered </div>');
			redirect('auth');
		}
	}

	public function register() {

		$this->load->library('form_validation');
        // Menetapkan aturan validasi
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => '<div class="alert alert-danger" role="alert">Email Sudah Diregistrasi, Gunakan Email Yang Lain</div>'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password2]', [
            'matches' => '<div class="alert alert-danger" role="alert">Password Tidak Sesuai! </div>',
            'min_length' => '<div class="alert alert-danger" role="alert">Password Terlalu Pendek, Min. 8 Karakter!</div>'
        ]);
        $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim');

        // Melakukan validasi
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman registrasi dengan pesan kesalahan
            $this->session->set_flashdata('err', validation_errors());
            redirect('Dashboard/view_user');
            return;
        }

        // Jika validasi berhasil, lanjutkan dengan proses pendaftaran
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => 1
        ];
        $this->m_user->insert_user($data);

        // Set flashdata untuk notifikasi sukses
        $this->session->set_flashdata('input', 'input');
        redirect('Dashboard/view_user');
    }

	public function hapus_user()
	{
		$user_id = $this->input->post('user_id');

		$hasil = $this->m_user->delete_user($user_id);

		if ($hasil == false) {

            $this->session->set_flashdata('errdelete', 'errdelete');
            redirect('Dashboard/view_user');

        } else {

            $this->session->set_flashdata('delete', 'delete');
            redirect('Dashboard/view_user');

        }
	}

	public function edit() {

		$id = $this->input->post('user_id');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
             $this->session->set_flashdata('errupdate', 'errupdate');
            redirect('Dashboard/view_user');
        } else {
            $new_password = $this->input->post('new_password');
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true))
            ];
            if (!empty($new_password)) {
                $data['password'] = password_hash($new_password, PASSWORD_DEFAULT);
            }

            $this->m_user->update_user($id, $data);
            $this->session->set_flashdata('update', 'update');
            redirect('Dashboard/view_user');
        }
    }

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert"> You have been logout!</div>');
		redirect('auth');
	}

	public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
