// application/models/User_model.php

<?php
class User_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_user_by_email($email) {
        $query = $this->db->get_where('users', array('email' => $email));
        return $query->row_array();
    }

    public function create_user($data) {
        return $this->db->insert('users', $data);
    }

    public function update_password($email, $new_password) {
        $this->db->where('email', $email);
        $this->db->update('users', array('password' => $new_password));
        return $this->db->affected_rows() > 0;
    }
}
