<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class categoryModel extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getSub()
    {
        return $this->db->select('*')
            ->from('categories')
            ->where('parent != ', 0, FALSE)
            ->get()->result_array();
    }

    public function showClient($id)
    {
        return $this->db->select('*')
            ->from('categories')
            ->where('parent', $id)
            ->get()->result_array();
    }

    public function getCategory($id){
        return $this->db->select('*')
            ->from('categories')
            ->where('id_category', $id)
            ->get()->row_array();
    }
}