<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Web_Public extends CI_Controller {

	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_peserta');
		$this->load->model('m_penilaian');
		$this->load->model('m_user');
    }

	public function index()
	{
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

		$this->load->view('public', $data);
	}

}
