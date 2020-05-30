<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('productModel');
        $this->load->model('categoryModel');
    }

    public function index()
    {
        $data['products'] = $this->productModel->showProductCategory(2);
        $data['categories'] = $this->categoryModel->showClient(1);
        $this->load->view('index', $data);
    }

    public function catSub($id){
        $data['category'] = $this->categoryModel->getCategory($id);
        $par = $data['category']['parent'];
        $data['categories'] = $this->categoryModel->showClient($par);
        $data['products'] = $this->productModel->showProductCategory($id);
        $this->load->view('cat_sub', $data);
    }

    public function catParent($id){
        $data['category'] = $this->categoryModel->getCategory($id);
        $data['categories'] = array();
        $data['categories'] = $this->categoryModel->showClient($id);
        if (!isset($data['categories']['0'])){
            redirect('err');
        }
        $one = $data['categories'][0];
        $data['products'] = $this->productModel->showProductCategory($one['id_category']);
        $this->load->view('category', $data);
    }

    public function err(){
        $this->load->view('error');
    }
}
