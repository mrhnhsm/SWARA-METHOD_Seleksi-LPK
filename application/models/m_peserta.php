<?php

class M_peserta extends CI_Model
{

    public function get_all_peserta()
    {
        // Query untuk mengambil semua data dari tabel datapeserta dan diurutkan berdasarkan nama A-Z
        $hasil = $this->db->query("SELECT * FROM data_peserta ORDER BY nama ASC");
        return $hasil;
    }

    public function get_all_criteria()
    {
        // Query untuk mengambil semua data dari tabel datapeserta dan diurutkan berdasarkan nama A-Z
        $hasil = $this->db->query("SELECT * FROM saw_criterias");
        return $hasil;
    }

    public function get_all_bobot()
    {
        // Query untuk mengambil semua data dari tabel saw_criterias
        $hasil = $this->db->query("SELECT * FROM saw_criterias");
        return $hasil; // Mengembalikan hasil query sebagai array objek
    }

    public function get_all_nilai()
    {
        // Query untuk mengambil semua data dari tabel data_penilaian dan data_peserta
        // diurutkan berdasarkan nama dari A-Z
        $hasil = $this->db->query("
        SELECT dp.*, dpes.* 
        FROM data_penilaian dp
        JOIN data_peserta dpes ON dp.id_alternative = dpes.user_id
        ORDER BY dpes.nama ASC");
        return $hasil; // Mengembalikan hasil query sebagai array objek
    
    }

    public function get_criterias() {
        $query = $this->db->get('saw_criterias');
        return $query->result();
    }

    public function insert_peserta($user_id, $nama, $usia, $pendidikan_terakhir, $alamat, $tinggi_badan, $berat_badan)
    {
        $this->db->trans_start();

        $this->db->query("INSERT INTO data_peserta(user_id, nama, usia, pendidikan, alamat, tinggi_badan, berat_badan) 
                        VALUES ('$user_id', '$nama', '$usia', '$pendidikan_terakhir', '$alamat', '$tinggi_badan', '$berat_badan')");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_nilai_kesemaptaan($id_alternative, $id_criteria, $bobot, $bobot_nilai)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE data_penilaian SET kesemaptaan_tubuh='$bobot' WHERE id_alternative='$id_alternative'");
        $this->db->query("INSERT INTO saw_evaluations (id_alternative, id_criteria, value)
                            VALUES ('$id_alternative', '$id_criteria', '$bobot_nilai')
                            ON DUPLICATE KEY UPDATE value = VALUES(value)");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_nilai_kesehatan($id_alternative, $id_criteria, $bobot, $bobot_nilai)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE data_penilaian SET kesehatan='$bobot' WHERE id_alternative='$id_alternative'");
        $this->db->query("INSERT INTO saw_evaluations (id_alternative, id_criteria, value)
                            VALUES ('$id_alternative', '$id_criteria', '$bobot_nilai')
                            ON DUPLICATE KEY UPDATE value = VALUES(value)");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_nilai_wawancara($id_alternative, $id_criteria, $bobot, $bobot_nilai)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE data_penilaian SET wawancara='$bobot' WHERE id_alternative='$id_alternative'");
        $this->db->query("INSERT INTO saw_evaluations (id_alternative, id_criteria, value)
                            VALUES ('$id_alternative', '$id_criteria', '$bobot_nilai')
                            ON DUPLICATE KEY UPDATE value = VALUES(value)");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_nilai_fisik($id_alternative, $id_criteria, $lari, $push_up, $sit_up, $rata_rata_nilai)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE data_penilaian SET lari='$lari', push_up='$push_up', sit_up='$sit_up' WHERE id_alternative='$id_alternative'");
        
        $this->db->query("INSERT INTO saw_evaluations (id_alternative, id_criteria, value)
                            VALUES ('$id_alternative', '$id_criteria', '$rata_rata_nilai')
                            ON DUPLICATE KEY UPDATE value = VALUES(value)");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function insert_nilai_jepang($id_alternative, $id_criteria, $hiragana, $katakana, $kata_benda, $kata_kerja, $kata_sifat, $rata_rata_nilai)
    {
        $this->db->trans_start();

        $this->db->query("INSERT INTO data_penilaian(id_alternative, hiragana, katakana, kata_benda, kata_kerja, kata_sifat)
                        VALUES ('$id_alternative', '$hiragana', '$katakana', '$kata_benda', '$kata_kerja', '$kata_sifat')");
        
        $this->db->query("INSERT INTO saw_evaluations(id_alternative, id_criteria, value)
                        VALUES ('$id_alternative', '$id_criteria', '$rata_rata_nilai')");
        
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function delete_alternatif($user_id)
    {
       $this->db->trans_start();

       $this->db->query("DELETE FROM data_peserta WHERE user_id='$user_id'");
       $this->db->query("DELETE FROM data_penilaian WHERE id_alternative='$user_id'");
       $this->db->query("DELETE FROM saw_evaluations WHERE id_alternative='$user_id'");


       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function delete_matrix($id_alternative)
    {
       $this->db->trans_start();

       $this->db->query("DELETE FROM data_penilaian WHERE id_alternative='$id_alternative'");
       $this->db->query("DELETE FROM saw_evaluations WHERE id_alternative='$id_alternative'");


       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_peserta($user_id, $nama, $usia, $pendidikan_terakhir, $alamat, $tinggi_badan, $berat_badan)
    {
        $this->db->trans_start();

        $this->db->query("UPDATE data_peserta SET nama='$nama', usia='$usia', pendidikan='$pendidikan_terakhir', alamat='$alamat', tinggi_badan='$tinggi_badan', berat_badan='$berat_badan'
        WHERE user_id='$user_id'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_data_bobot($id_criteria, $criteria, $weight, $attribute)
    {
        $this->db->trans_start();

        // Menggunakan query builder untuk melakukan update
        $this->db->where('id_criteria', $id_criteria);
        $this->db->update('saw_criterias', [
            'criteria' => $criteria,
            'weight' => $weight,
            'attribute' => $attribute
        ]);

        $this->db->trans_complete();

        return $this->db->trans_status();
    }



}