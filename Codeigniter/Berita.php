<?php
class Berita extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('berita_model');
    }

    public function index() {
        $data['beritas'] = $this->berita_model->get_all_berita();
        // Load view dan kirim data beritas
    }

    public function create() {
        // Tampilkan form untuk membuat berita
    }

    public function store() {
        $data = array(
            'judul' => $this->input->post('judul'),
            'konten' => $this->input->post('konten')
        );

        $this->berita_model->create_berita($data);
        // Redirect ke halaman index atau halaman lain
    }

    public function edit($id) {
        $data['berita'] = $this->berita_model->get_berita_by_id($id);
        // Tampilkan form untuk mengedit berita
    }

    public function update($id) {
        $data = array(
            'judul' => $this->input->post('judul'),
            'konten' => $this->input->post('konten')
        );

        $this->berita_model->update_berita($id, $data);
        // Redirect ke halaman index atau halaman lain
    }

    public function delete($id) {
        $this->berita_model->delete_berita($id);
        // Redirect ke halaman index atau halaman lain
    }
}
