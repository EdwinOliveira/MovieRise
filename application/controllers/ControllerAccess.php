<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAccess extends CI_Controller
{
    //Php Constructor
    public function __construct()
    {
        //Calls contructor from Ci_Controller
        parent::__construct();
        $this->load->model('ModelMovies');
    }


    public function view($page = "home")
    {

        if (!file_exists(APPPATH . "views/pages/{$page}.php")) {
            show_404();
        }

        $data["title"] = $page;

        $this->load->view("templates/header", $data);
        $this->loadPage($page);
        $this->load->view("templates/footer", $data);
    }

    private function loadPage($page)
    {
        switch ($page) {
            case "backoffice":
                if ($this->session->userdata("email")) {
                    redirect('backoffice');
                }
            case "adicionaFilme":
                if ($this->session->userdata("email")) {
                    redirect('adicionaFilme');
                }
            default:
                $this->load->view("pages/{$page}", $this->getMovie());
        }

    }

    public function getMovie()
    {
        $movies["movies"] = $this->ModelMovies->getMovieModel();

        return $movies;
    }
}
