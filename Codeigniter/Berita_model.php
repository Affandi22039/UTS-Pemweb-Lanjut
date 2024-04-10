<?php
class Berita_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_all_berita() {
        return $this->db->get('berita')->result_array();
    }

    public function get_berita_by_id($id) {
        return $this->db->get_where('berita', array('id' => $id))->row_array();
    }

    public function create_berita($data) {
        return $this->db->insert('berita', $data);
    }

    public function update_berita($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('berita', $data);
    }

    public function delete_berita($id) {
        $this->db->where('id', $id);
        return $this->db->delete('berita');
    }
}
