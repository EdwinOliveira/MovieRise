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

public function getMovie() {
        $resultMovie["movies"] = $this->ModelAccountOperation->getMovie();

        return $resultMovie;
    }

    private function loadPage($page) {
            $this->load->view("pages/{$page}", $this->getMovie());
    }
}