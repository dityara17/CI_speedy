<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productModel extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get()
    {
        $this->db->select('*');
        $this->db->from('products as p');
        $this->db->join('categories as c', 'p.category_id = c.id_category');
        $this->db->order_by('p.id', 'desc');
        $q = $this->db->get();
        return $q->result_array();
    }
    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('products as p');
        $this->db->join('categories as c', 'p.category_id = c.id_category');
        $this->db->where('p.id', $id);
        $this->db->order_by('p.id', 'desc');
        $q = $this->db->get();
        return $q->row_array();
    }

    public function create($data_products){
        $this->db->insert('products', $data_products);
    }

    public function update($data_products,$id){
        $this->db->where('id', $id);
        $this->db->update('products', $data_products);
    }

    public function destroy($id){
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

    public function showProductCategory($id){
        $this->db->select('*');
        $this->db->from('products as p');
        $this->db->join('categories as c', 'p.category_id = c.id_category');
        $this->db->order_by('p.id', 'desc');
        $this->db->where('p.category_id', $id);
        $q = $this->db->get();
        return $q->result_array();
    }
}