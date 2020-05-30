<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('productModel');
        $this->load->model('categoryModel');
        $this->load->model('userModel');

        if($this->session->userdata('logged_in') != true){
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        $data['products'] = $this->productModel->get();
        $this->load->view('backend/index', $data);
    }

    public function product()
    {
        $data['categories'] = $this->categoryModel->getSub();
        $this->load->view('backend/product', $data);
    }
    public function editProduct($id)
    {
        $data['categories'] = $this->categoryModel->getSub();
        $data['product'] = $this->productModel->find($id);
        $this->load->view('backend/editProduct', $data);
    }

    public function storeProduct()
    {
        $data_product = array(
            'name' => $this->input->post('name'),
            'desc' => $this->input->post('desc'),
            'p_price' => $this->input->post('pprice'),
            's_price' => $this->input->post('sprice'),
            'html' => $this->input->post('html'),
            'category_id' => $this->input->post('category')
        );
        $this->productModel->create($data_product);
        redirect('admin');
    }

    public function updateProduct($id){
        $data_product = array(
            'name' => $this->input->post('name'),
            'desc' => $this->input->post('desc'),
            'p_price' => $this->input->post('pprice'),
            's_price' => $this->input->post('sprice'),
            'html' => $this->input->post('html'),
            'category_id' => $this->input->post('category')
        );
        $this->productModel->update($data_product,$id);
        redirect('admin');
    }

    public function destroyProduct($id){
        if (!$id){
            return false;
        }
        $this->productModel->destroy($id);
        redirect('admin');
    }


}