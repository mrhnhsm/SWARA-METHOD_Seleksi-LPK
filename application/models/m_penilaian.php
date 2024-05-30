<?php

class M_penilaian extends CI_Model
{

    public function get_nilai_hiragana($nilai) {
        if ($nilai >= 0 && $nilai <= 25) return 2;
        if ($nilai >= 26 && $nilai <= 51) return 3;
        if ($nilai >= 52 && $nilai <= 77) return 4;
        if ($nilai >= 78 && $nilai <= 104) return 5;
        return null;
    }

    public function get_nilai_katakana($nilai) {
        if ($nilai >= 0 && $nilai <= 24.5) return 2;
        if ($nilai >= 25.5 && $nilai <= 50) return 3;
        if ($nilai >= 51 && $nilai <= 75.5) return 4;
        if ($nilai >= 76.5 && $nilai <= 102) return 5;
        return null;
    }

    public function get_nilai_kata_benda($nilai) {
        if ($nilai >= 0 && $nilai <= 7.4) return 2;
        if ($nilai >= 7.5 && $nilai <= 14) return 3;
        if ($nilai >= 15 && $nilai <= 21.5) return 4;
        if ($nilai >= 22.5 && $nilai <= 30) return 5;
        return null;
    }

    public function get_nilai_kata_kerja($nilai) {
        if ($nilai >= 0 && $nilai <= 14) return 2;
        if ($nilai >= 15 && $nilai <= 29) return 3;
        if ($nilai >= 30 && $nilai <= 45) return 4;
        if ($nilai >= 46 && $nilai <= 60) return 5;
        return null;
    }

    public function get_nilai_kata_sifat($nilai) {
        if ($nilai >= 0 && $nilai <= 14) return 2;
        if ($nilai >= 15 && $nilai <= 29) return 3;
        if ($nilai >= 30 && $nilai <= 44) return 4;
        if ($nilai >= 45 && $nilai <= 60) return 5;
        return null;
    }

    public function get_nilai_lari($nilai){
        if ($nilai >= 0 && $nilai <= 1) return 3;
        if ($nilai >= 1.1 && $nilai <= 2) return 4;
        if ($nilai >= 2.1 && $nilai <= 3) return 5;
        return null;
    }

    public function get_nilai_push_up($nilai){
        if ($nilai >= 0 && $nilai <= 10) return 2;
        if ($nilai >= 11 && $nilai <= 20) return 3;
        if ($nilai >= 21 && $nilai <= 30) return 4;
        if ($nilai >= 31 && $nilai <= 35) return 5;
        return null;
    }

    public function get_nilai_sit_up($nilai){
        if ($nilai >= 0 && $nilai <= 5) return 1;
        if ($nilai >= 6 && $nilai <= 10) return 2;
        if ($nilai >= 11 && $nilai <= 15) return 3;
        if ($nilai >= 16 && $nilai <= 20) return 4;
        if ($nilai >= 21 && $nilai <= 25) return 5;
        return null;
    }

    public function get_criteria_weights() {
        $this->db->select('weight');
        $this->db->from('saw_criterias');
        $this->db->order_by('id_criteria', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_evaluations() {
        $sql = "SELECT
                  a.id_alternative,
                  p.nama,
                  SUM(IF(a.id_criteria=1,a.value,0)) AS C1,
                  SUM(IF(a.id_criteria=2,a.value,0)) AS C2,
                  SUM(IF(a.id_criteria=3,a.value,0)) AS C3,
                  SUM(IF(a.id_criteria=4,a.value,0)) AS C4,
                  SUM(IF(a.id_criteria=5,a.value,0)) AS C5
                FROM
                  saw_evaluations a
                  JOIN data_peserta p ON a.id_alternative = p.user_id
                GROUP BY a.id_alternative, p.nama
                ORDER BY p.nama ASC";
        $query = $this->db->query($sql);
        return $query->result();
    }    

    public function get_evaluations2() {
        // Get max and min values for each criterion
        $X = array();
        for ($i = 1; $i <= 5; $i++) {
            $query = $this->db->select_max('value')
                              ->where('id_criteria', $i)
                              ->get('saw_evaluations');
            $X['max'][$i] = $query->row()->value;

            $query = $this->db->select_min('value')
                              ->where('id_criteria', $i)
                              ->get('saw_evaluations');
            $X['min'][$i] = $query->row()->value;
        }

        // Main query to get evaluations
        $sql = "SELECT
                  a.id_alternative,
                  p.nama,
                  SUM(IF(a.id_criteria=1, IF(b.attribute='benefit', a.value/{$X['max'][1]}, {$X['min'][1]}/a.value), 0)) AS C1,
                  SUM(IF(a.id_criteria=2, IF(b.attribute='benefit', a.value/{$X['max'][2]}, {$X['min'][2]}/a.value), 0)) AS C2,
                  SUM(IF(a.id_criteria=3, IF(b.attribute='benefit', a.value/{$X['max'][3]}, {$X['min'][3]}/a.value), 0)) AS C3,
                  SUM(IF(a.id_criteria=4, IF(b.attribute='benefit', a.value/{$X['max'][4]}, {$X['min'][4]}/a.value), 0)) AS C4,
                  SUM(IF(a.id_criteria=5, IF(b.attribute='benefit', a.value/{$X['max'][5]}, {$X['min'][5]}/a.value), 0)) AS C5
                FROM
                  saw_evaluations a
                  JOIN saw_criterias b USING(id_criteria)
                  JOIN data_peserta p ON a.id_alternative = p.user_id
                GROUP BY a.id_alternative
                ORDER BY p.nama ASC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_criterias() {
        $query = $this->db->get('saw_criterias');
        return $query->result();
    }

    public function calculate_criteria_weights() {
        $criterias = $this->get_criterias();

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

        return $criterias_copy; // Return the original order of criterias with their Wi values
    }


}