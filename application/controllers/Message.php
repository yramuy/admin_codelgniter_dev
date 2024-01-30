<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
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

    public function message_form()
    {
        $this->load->view('header');
        $this->load->view('message/message_form');
        $this->load->view('footer');
    }

    public function send_message()
    {
        $number = $this->input->post('mobile_number');
        $numArr = explode(',', $number);
        for ($i = 0; $i < count($numArr); $i++) {
            $data = array(
                "mobileNumber" => $numArr[$i],
                "message" => $this->input->post('message')
            );

            $this->load->view('message/send_msg', $data);
        }


    }
}
