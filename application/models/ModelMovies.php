<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ModelMovies extends CI_Model { 

    public function addMovie($data) {
        $this->db->insert("filmes", $data);
    }

    public function getMovieModel() {
        $this->db->select("*");
        $this->db->from("filmes");

        $query = $this->db->get();

        return $query->result();
    }

    public function updateMovie($data) {
        $condition = "titulo= '{$data['titulo']}'";
        $this->db->where($condition);
        $this->db->set($data );
        return($this->db->update("filmes"));
    }
}?>