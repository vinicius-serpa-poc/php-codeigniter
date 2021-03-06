<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function index()
    {
        $text = "some text ...";
        $data = array("message" => $text);
        $this->load->view("product/list", $data);
    }

    public function list_dump()
    {
        $this->load->model("ProductModel", "products"); // params: model name, ref name
        $result = $this->products->list_all(); 
        echo "<pre>";
        var_dump($result);
    }

    public function list_table()
    {
        $this->load->model("ProductModel", "products");
        $result = $this->products->list_all();
        $data = array("products" => $result);
        $this->load->view("product/list_table", $data);
    }

}