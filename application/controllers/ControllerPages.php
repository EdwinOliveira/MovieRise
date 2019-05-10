<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ControllerPages extends CI_Controller
{

    //Php Constructor
    public function __construct()
    {
        //Calls contructor from Ci_Controller
        parent::__construct();
        $this->load->model('ModelAccountOperation');
    }

    public function login()
    {
        if ($this->session->userdata('email')) {
            redirect('backoffice');
        }

        $config = array(
            array(
                "field" => "email",
                "label" => "Email",
                "rules" => "required|trim"
            ),
            array(
                "field" => "password",
                "label" => "Password",
                "rules" => "required|trim"
            )
        );
        $this->form_validation->set_rules($config);

        if (!$this->form_validation->run()) {
            redirect();
        }

        $data = array(
            "email" => $this->input->post("email"),
            "password" => md5($this->input->post("password"))
        );

        $result = $this->ModelAccountOperation->Validate_Data($data);

        echo $result[0]->email;

        if ($result) {
            $sessionData = array(
                "email" => $result[0]->email
            );

            $this->session->set_userdata($sessionData);

            redirect('backoffice');
        };

        redirect();
    }

    public function createAccount()
    {
        $config = array(
            array(
                "field" => "userName",
                "label" => "userName",
                "rules" => "required|trim"
            ),
            array(
                "field" => "email",
                "label" => "Email",
                "rules" => "required|trim"
            ),
            array(
                "field" => "password",
                "label" => "Password",
                "rules" => "required|trim"
            )
        );

        $this->form_validation->set_rules($config);

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('incorrectData', 'Fill in all the Fields.');
            redirect('createAccount');
        }

        $data = array(
            "nome" => $this->input->post("userName"),
            "email" => $this->input->post("email"),
            "password" => md5($this->input->post("password"))
        );

        $this->ModelAccountOperation->insertData($data);

        $this->session->set_flashdata('validData', 'Account Created.');
        redirect('createAccount');
    }

    public function forgotPassword()
    {
        $config = array(
            array(
                "field" => "email",
                "rules" => "required|trim"
            ),
            array(
                "field" => "password",
                "rules" => "required|trim"
            ),
            array(
                "field" => "password2",
                "rules" => "required|trim|matches[password]"
            )
        );

        $this->form_validation->set_rules($config);

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('incorrectData', 'Fill in the fields or passwords don`t match.');
            redirect('forgotPassword');
        }

        $data = array(
            "email" => $this->input->post("email"),
            "password" => md5($this->input->post("password"))
        );

        $this->ModelAccountOperation->changePassword($data);

        $this->session->set_flashdata('validData', 'Password Changed.');
        redirect('forgotPassword');
    }    
}
