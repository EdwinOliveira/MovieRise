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

    public function updateMovie()
    {
        $config = array(
            array(
                "field" => "imgMovie",
                "label" => "Image Movie",
                "rules" => "required"
            ),
            array(
                "field" => "title",
                "label" => "Title Movie",
                "rules" => "required|trim"
            ),
            array(
                "field" => "movie",
                "label" => "Movie",
                "rules" => "required|trim"
            ),
            array(
                "field" => "descricao",
                "label" => "Description Movie",
                "rules" => "required|trim"
            )
        );

        $this->form_validation->set_rules($config);

        if (!($this->form_validation->run())) {
            $this->session->set_flashdata("incorrectData", "The filled data is Incorrect");
            redirect('changeData');
        } else {
            $data = array(
                "foto" => $this->input->post("imgMovie"),
                "titulo" => $this->input->post("title"),
                "filme" => $this->input->post("movie"),
                "descricao" => $this->input->post("descricao")
            );

            $returnData = $this->ModelMovies->updateMovie($data);

            if(!$returnData) {
                $this->session->set_flashdata("incorrectDataModel","No Movie with that Title Present");
                redirect('atualizarFilme');
            } else {
                $this->session->set_flashdata("validData","Data Changed!");
                redirect('atualizarFilme');
            }
        }
    }
}
