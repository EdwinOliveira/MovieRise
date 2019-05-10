<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerMedia extends CI_Controller
{
    //Php Constructor
    public function __construct()
    {
        //Calls contructor from Ci_Controller
        parent::__construct();
        $this->load->model('ModelMovies');
    }

    public function storeMovie()
    {
        $config = array(
            array(
                "field" => "imgMovie",
            ),
            array(
                "field" => "title",
                "rules" => "required|trim"
            ),
            array(
                "field" => "movie",
                "rules" => "required|trim"
            ),
            array(
                "field" => "descricao",
                "rules" => "required|trim"
            )
        );

        $this->form_validation->set_rules($config);

        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('incorrectData', 'Fill in all the fields.');
            redirect('adicionaFilme');
        }

        $data = array(
            "foto" => $this->input->post("imgMovie"),
            "titulo" => $this->input->post("title"),
            "filme" => $this->input->post("movie"),
            "descricao" => $this->input->post("descricao")
        );

        $this->ModelMovies->addMovie($data);

        $this->session->set_flashdata('validData', 'Movie Added');

        redirect('adicionaFilme');
    }

}
