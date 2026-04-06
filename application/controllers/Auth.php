<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login() {
        // Load login view
        $this->load->view('auth/login');
    }

    public function logout() {
        // Logout logic
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function register() {
        // Load registration view
        $this->load->view('auth/register');
    }

    public function do_register() {
        // Registration logic
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            // Save user to database
            $data = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            );
            $this->db->insert('users', $data);
            redirect('auth/login');
        }
    }
}