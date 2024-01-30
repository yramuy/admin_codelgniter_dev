<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function login()
    {

        $this->load->view('auth/login');
    }

    public function signup()
    {
        $this->load->view('auth/signup');

    }
    public function save_user()
    {

        // Get the user's password from a form or another source
        $user_password = $this->input->post('password');

        // Hash the password
        $hashed_password = password_hash($user_password, PASSWORD_BCRYPT);

        $data = array(
            'name' => $this->input->post('full_name'),
            'user_name' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $hashed_password,
            'phone_number' => $this->input->post('phone'),
            'role' => $this->input->post('role'),
        );

        $this->User_Model->save_user($data);
        redirect('auth/login');

    }

    public function check_login()
    {
        $userName = $this->input->post('user_name');
        $password = $this->input->post('password');

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // $user = $this->
    }

    public function sendmsg()
    {
        $this->load->view('auth/send_msg');
    }
}
