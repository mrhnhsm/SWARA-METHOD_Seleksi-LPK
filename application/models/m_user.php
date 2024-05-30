<?php
class M_user extends CI_Model {

    public function get_all_users() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function get_user_by_id($id) {
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row_array();
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete_user($user_id)
    {
       $this->db->trans_start();

       $this->db->query("DELETE FROM users WHERE id='$user_id'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }
}