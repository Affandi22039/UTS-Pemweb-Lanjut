// application/controllers/Auth.php

<?php
class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function login() {
        // Implementasi logika login di sini
    }

    public function register() {
        // Implementasi logika registrasi di sini
    }

    public function forgot_password() {
        // Implementasi logika lupa password di sini
    }

    public function reset_password($token) {
        // Implementasi logika reset password di sini
    }
}
