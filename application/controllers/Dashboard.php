<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();
		$this->load->model('m_peserta');
		$this->load->model('m_penilaian');
		$this->load->model('m_user');
    }

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['konten'] = "dashboard";
		$this->load->view('Admin/dashboard_admin', $data);
	}

	public function view_user() {
		$data['title'] = "Akun User";
		$data['konten'] = "user";
        $data['users'] = $this->m_user->get_all_users();
        $this->load->view('admin/akun_user', $data);
    }

	public function view_method()
	{
		$data['title'] = "Method";
		$data['konten'] = "method";

		$criterias = $this->m_peserta->get_criterias();

			// Buat salinan dari array $criterias
			$criterias_copy = $criterias;

			// Step 1: Sort by initial weight in descending order
			usort($criterias, function($a, $b) {
				return $b->weight <=> $a->weight;
			});

			// Convert weights to percentage for sorting
			foreach ($criterias as $criteria) {
				$criteria->weight_percentage = $criteria->weight * 100;
			}

			// Step 2: Calculate initial ranks and Sj values
			$n = count($criterias);
			foreach ($criterias as $index => $criteria) {
				$criteria->initial_rank = $index + 1;
				// Calculate Sj based on initial rank
				if ($criteria->initial_rank == 1) {
					$criteria->Sj = 0;
				} else if ($criteria->initial_rank == 2) {
					$criteria->Sj = 1 / 3;
				} else if ($criteria->initial_rank == 3) {
					$criteria->Sj = 2 / 3;
				} else if ($criteria->initial_rank == 4) {
					$criteria->Sj = 1;
				} else if ($criteria->initial_rank == 5) {
					$criteria->Sj = 4 / 3;
				}
			}

			// Step 3: Calculate Kj, Qi, and Wi
			$Q = [1]; // Initial value for Q1
			$sum_Qi = 1; // Initial sum of Qi including Q1

			for ($i = 1; $i < $n; $i++) {
				$Kj = $criterias[$i]->Sj + 1;
				$Qi = $Q[$i-1] / $Kj;
				$Q[] = $Qi;
				$sum_Qi += $Qi;
			}

			// Step 4: Assign Qi and calculate Wi
			foreach ($criterias as $index => $criteria) {
				$criteria->Qi = $Q[$index];
				$criteria->Wi = $criteria->Qi / $sum_Qi;
				// Store the original Wi before sorting
				$criteria->original_Wi = $criteria->Wi;
			}

			// Step 5: Sort by final weight Wi in descending order for final ranking
			usort($criterias, function($a, $b) {
				return $b->Wi <=> $a->Wi;
			});

			// Step 6: Assign final ranks
			foreach ($criterias as $index => $criteria) {
				$criteria->final_rank = $index + 1;
			}
			
		function format_number($number, $decimals = 4) {
			if (floor($number) == $number) {
				return number_format($number, 0); // Tampilkan sebagai bilangan bulat
			} else {
				return number_format($number, $decimals); // Tampilkan dengan desimal
			}
		}
        $data['criterias'] = $criterias;
		$this->load->view('Admin/swara_method', $data);
	}

	public function view_peserta()
	{
		$data['title'] = "Data Peserta";
		$data['konten'] = "peserta";
		$data['peserta'] = $this->m_peserta->get_all_peserta()->result_array();
		$this->load->view('Admin/data_peserta', $data);
	}

	public function view_bobot()
	{
		$data['title'] = "Bobot dan Kriteria";
		$data['konten'] = "bobot";
		$data['bobot'] = $this->m_peserta->get_all_bobot()->result_array(); // Menggunakan '=' bukan '-'
		$this->load->view('Admin/data_bobot', $data);
	}

	public function view_penilaian_jepang()
	{
		$data['title'] = "Penilaian Bahasa Jepang";
		$data['konten'] = "jepang";
		$data['jepang'] = $this->m_peserta->get_all_nilai()->result_array(); // Menggunakan '=' bukan '-
		$data['peserta'] = $this->m_peserta->get_all_peserta()->result_array();
		$data['kriteria'] = $this->m_peserta->get_all_criteria()->result_array();
		$this->load->view('Admin/bahasa_jepang', $data);
	}

	public function view_ketahanan_fisik()
	{
		$data['title'] = "Penilaian Ketahanan Fisik";
		$data['konten'] = "jepang";
		$data['fisik'] = $this->m_peserta->get_all_nilai()->result_array(); // Menggunakan '=' bukan '-
		$data['peserta'] = $this->m_peserta->get_all_peserta()->result_array();
		$data['kriteria'] = $this->m_peserta->get_all_criteria()->result_array();
		$this->load->view('Admin/ketahanan_fisik', $data);
	}

	public function view_kesemaptaan_tubuh()
	{
		$data['title'] = "Penilaian Kesemaptaan Tubuh";
		$data['konten'] = "kesemaptaan_tubuh";
		$data['kesemaptaan'] = $this->m_peserta->get_all_nilai()->result_array(); // Menggunakan '=' bukan '-
		$data['peserta'] = $this->m_peserta->get_all_peserta()->result_array();
		$data['kriteria'] = $this->m_peserta->get_all_criteria()->result_array();
		$this->load->view('Admin/kesemaptaan_tubuh', $data);
	}

	public function view_kesehatan()
	{
		$data['title'] = "Penilaian Kesehatan";
		$data['konten'] = "kesehatan";
		$data['kesehatan'] = $this->m_peserta->get_all_nilai()->result_array(); // Menggunakan '=' bukan '-
		$data['peserta'] = $this->m_peserta->get_all_peserta()->result_array();
		$data['kriteria'] = $this->m_peserta->get_all_criteria()->result_array();
		$this->load->view('Admin/kesehatan', $data);
	}

	public function view_wawancara()
	{
		$data['title'] = "Penilaian Wawancara";
		$data['konten'] = "wawancara";
		$data['wawancara'] = $this->m_peserta->get_all_nilai()->result_array(); // Menggunakan '=' bukan '-
		$data['peserta'] = $this->m_peserta->get_all_peserta()->result_array();
		$data['kriteria'] = $this->m_peserta->get_all_criteria()->result_array();
		$this->load->view('Admin/wawancara', $data);
	}

	public function view_tes()
	{
		$data['title'] = "Hasil Seluruh Tes";
		$data['konten'] = "seluruh tes";
		$data['tes'] = $this->m_peserta->get_all_nilai()->result_array(); // Menggunakan '=' bukan '-
		$data['peserta'] = $this->m_peserta->get_all_peserta()->result_array();
		$data['kriteria'] = $this->m_peserta->get_all_criteria()->result_array();
		$this->load->view('Admin/hasil_semua_test', $data);
	}

	public function view_matrix()
	{
		$data['title'] = "Perhitungan Matrix";
		$data['konten'] = "matrix";
		$data['evaluations2'] = $this->m_penilaian->get_evaluations2();
		$data['evaluations'] = $this->m_penilaian->get_evaluations();
		$this->load->view('Admin/matrix', $data);
	}

	public function view_preferensi_hasil()
	{
		$data['title'] = "Preferensi Hasil";
		$data['konten'] = "hasil";

		// Get criteria weights from the model
		$weights = $this->m_penilaian->calculate_criteria_weights();

		// Convert weights to an array
		$W = array();
		foreach ($weights as $weight) {
			$W[] = $weight->original_Wi;
		}

		// Get evaluations from the model
		$evaluations = $this->m_penilaian->get_evaluations2();

		// Calculate results
		$P = array();
		$m = count($W);
		foreach ($evaluations as $evaluation) {
			$P[$evaluation->id_alternative] = 0;
			for ($j = 1; $j <= 5; $j++) {
				$P[$evaluation->id_alternative] += $evaluation->{'C' . $j} * $W[$j - 1];
			}
		}

		// Prepare data for view
		$results = array();
		foreach ($evaluations as $evaluation) {
			$results[] = array(
				'no' => $evaluation->id_alternative,
				'nama' => $evaluation->nama,
				'hasil' => $P[$evaluation->id_alternative] // Do not round here
			);
		}

		// Sort results by 'hasil' in descending order
		usort($results, function($a, $b) {
			return $b['hasil'] <=> $a['hasil'];
		});

		// Limit to top 10 results
		$results2 = array_slice($results, 0, 10);

		$data['results'] = $results;
		$data['results2'] = $results2;

		$this->load->view('Admin/preferensi_hasil', $data);
	}


	public function tambah_alternatif()
	{
		$nama = $this->input->post('nama');
		$usia = $this->input->post('usia');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		$alamat = $this->input->post('alamat');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$berat_badan = $this->input->post('berat_badan');
		$user_id = md5($nama . $usia . $alamat . $berat_badan);

		$hasil = $this->m_peserta->insert_peserta($user_id, $nama, $usia, $pendidikan_terakhir, $alamat, $tinggi_badan, $berat_badan);

		if ($hasil == false) {

            $this->session->set_flashdata('err', 'err');
            redirect('Dashboard/view_peserta');

        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Dashboard/view_peserta');

        }
	}

	public function tambah_bahasa_jepang()
	{
		$id_alternative = $this->input->post('id_alternative');
		$id_criteria = $this->input->post('id_criteria');
		$hiragana = $this->input->post('hiragana');
        $katakana = $this->input->post('katakana');
        $kata_benda = $this->input->post('kata_benda');
        $kata_kerja = $this->input->post('kata_kerja');
        $kata_sifat = $this->input->post('kata_sifat');

		// Mendapatkan nilai dari model
        $nilai_hiragana = $this->m_penilaian->get_nilai_hiragana($hiragana);
        $nilai_katakana = $this->m_penilaian->get_nilai_katakana($katakana);
        $nilai_kata_benda = $this->m_penilaian->get_nilai_kata_benda($kata_benda);
        $nilai_kata_kerja = $this->m_penilaian->get_nilai_kata_kerja($kata_kerja);
        $nilai_kata_sifat = $this->m_penilaian->get_nilai_kata_sifat($kata_sifat);

        // Menghitung total dan rata-rata
        $total_nilai = $nilai_hiragana + $nilai_katakana + $nilai_kata_benda + $nilai_kata_kerja + $nilai_kata_sifat;
        $rata_rata_nilai = round($total_nilai / 5);

		$hasil = $this->m_peserta->insert_nilai_jepang($id_alternative, $id_criteria, $hiragana, $katakana, $kata_benda, $kata_kerja, $kata_sifat, $rata_rata_nilai);

		if ($hasil == false) {

            $this->session->set_flashdata('err', 'err');
            redirect('Dashboard/view_penilaian_jepang');

        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Dashboard/view_penilaian_jepang');

        }
	}

	public function tambah_ketahanan_fisik()
	{
		$id_alternative = $this->input->post('id_alternative');
		$id_criteria = $this->input->post('id_criteria');
		$lari = $this->input->post('lari');
		$push_up = $this->input->post('push_up');
		$sit_up = $this->input->post('sit_up');

		//Mendapatkan Nilai Dri Model
		$nilai_lari = $this->m_penilaian->get_nilai_lari($lari);
		$nilai_push_up = $this->m_penilaian->get_nilai_push_up($push_up);
		$nilai_sit_up = $this->m_penilaian->get_nilai_push_up($sit_up);

		//Menghitung Total dan Rata-Rata Bobot
		$total_nilai = $nilai_lari + $nilai_push_up + $nilai_sit_up;
		$rata_rata_nilai = round($total_nilai / 3);

		$hasil = $this->m_peserta->update_nilai_fisik($id_alternative, $id_criteria, $lari, $push_up, $sit_up, $rata_rata_nilai);

		if ($hasil == false) {

            $this->session->set_flashdata('err', 'err');
            redirect('Dashboard/view_ketahanan_fisik');

        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Dashboard/view_ketahanan_fisik');

        }

	}

	public function tambah_kesemaptaan_tubuh()
	{
		$id_alternative = $this->input->post('id_alternative');
		$id_criteria = $this->input->post('id_criteria');
		$bobot = $this->input->post('bobot');

		$bobot_nilai = 0;
    
    	switch ($bobot) {
        case 'Buruk':
            $bobot_nilai = 1;
            break;
        case 'Cukup':
            $bobot_nilai = 2;
            break;
        case 'Sangat Cukup':
            $bobot_nilai = 3;
            break;
        case 'Baik':
            $bobot_nilai = 4;
            break;
        case 'Sangat Baik':
            $bobot_nilai = 5;
            break;
        default:
            // Handle the case where the input does not match any of the predefined values
            $bobot_nilai = 0; // or any default value you prefer
            break;
    	}

		$hasil = $this->m_peserta->update_nilai_kesemaptaan($id_alternative, $id_criteria, $bobot, $bobot_nilai);

		if ($hasil == false) {

            $this->session->set_flashdata('err', 'err');
            redirect('Dashboard/view_kesemaptaan_tubuh');
        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Dashboard/view_kesemaptaan_tubuh');
        }
	}

	public function tambah_kesehatan()
	{
		$id_alternative = $this->input->post('id_alternative');
		$id_criteria = $this->input->post('id_criteria');
		$bobot = $this->input->post('bobot');

		$bobot_nilai = 0;
    
    	switch ($bobot) {
        case 'Buruk':
            $bobot_nilai = 1;
            break;
        case 'Cukup':
            $bobot_nilai = 2;
            break;
        case 'Sangat Cukup':
            $bobot_nilai = 3;
            break;
        case 'Baik':
            $bobot_nilai = 4;
            break;
        case 'Sangat Baik':
            $bobot_nilai = 5;
            break;
        default:
            // Handle the case where the input does not match any of the predefined values
            $bobot_nilai = 0; // or any default value you prefer
            break;
    	}

		$hasil = $this->m_peserta->update_nilai_kesehatan($id_alternative, $id_criteria, $bobot, $bobot_nilai);

		if ($hasil == false) {

            $this->session->set_flashdata('err', 'err');
            redirect('Dashboard/view_kesehatan');
        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Dashboard/view_kesehatan');
        }
	}

	public function tambah_wawancara()
	{
		$id_alternative = $this->input->post('id_alternative');
		$id_criteria = $this->input->post('id_criteria');
		$bobot = $this->input->post('bobot');

		$bobot_nilai = 0;
    
    	switch ($bobot) {
        case 'Buruk':
            $bobot_nilai = 1;
            break;
        case 'Cukup':
            $bobot_nilai = 2;
            break;
        case 'Sangat Cukup':
            $bobot_nilai = 3;
            break;
        case 'Baik':
            $bobot_nilai = 4;
            break;
        case 'Sangat Baik':
            $bobot_nilai = 5;
            break;
        default:
            // Handle the case where the input does not match any of the predefined values
            $bobot_nilai = 0; // or any default value you prefer
            break;
    	}

		$hasil = $this->m_peserta->update_nilai_wawancara($id_alternative, $id_criteria, $bobot, $bobot_nilai);

		if ($hasil == false) {

            $this->session->set_flashdata('err', 'err');
            redirect('Dashboard/view_wawancara');
        } else {

            $this->session->set_flashdata('input', 'input');
            redirect('Dashboard/view_wawancara');
        }
	}

	public function hapus_alternatif()
	{
		$user_id = $this->input->post('user_id');

		$hasil = $this->m_peserta->delete_alternatif($user_id);

		if ($hasil == false) {

            $this->session->set_flashdata('errdelete', 'errdelete');
            redirect('Dashboard/view_peserta');

        } else {

            $this->session->set_flashdata('delete', 'delete');
            redirect('Dashboard/view_peserta');

        }
	}

	public function hapus_matrix()
	{
		$id_alternative = $this->input->post('id_alternative');

		$hasil = $this->m_peserta->delete_matrix($id_alternative);

		if ($hasil == false) {

            $this->session->set_flashdata('errdelete', 'errdelete');
            redirect('Dashboard/view_matrix');

        } else {

            $this->session->set_flashdata('delete', 'delete');
            redirect('Dashboard/view_matrix');

        }
	}

	public function update_alternatif()
	{
		$nama = $this->input->post('nama');
		$usia = $this->input->post('usia');
		$pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
		$alamat = $this->input->post('alamat');
		$tinggi_badan = $this->input->post('tinggi_badan');
		$berat_badan = $this->input->post('berat_badan');
		$user_id = $this->input->post('user_id');

		$hasil = $this->m_peserta->update_peserta($user_id, $nama, $usia, $pendidikan_terakhir, $alamat, $tinggi_badan, $berat_badan);

		if ($hasil == false) {

            $this->session->set_flashdata('errupdate', 'errupdate');
            redirect('Dashboard/view_peserta');

        } else {

            $this->session->set_flashdata('update', 'update');
            redirect('Dashboard/view_peserta');

        }
	}

	public function update_bobot()
	{
		$id_criteria = $this->input->post('id_criteria');
		$criteria = $this->input->post('criteria');
		$weight = $this->input->post('weight');
		$attribute = $this->input->post('attribute');

		$hasil = $this->m_peserta->update_data_bobot($id_criteria, $criteria, $weight, $attribute);

		if ($hasil == false) {

            $this->session->set_flashdata('errupdate', 'errupdate');
            redirect('Dashboard/view_bobot');

        } else {

            $this->session->set_flashdata('update', 'update');
            redirect('Dashboard/view_bobot');

        }
	}


}
