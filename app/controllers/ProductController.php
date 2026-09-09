<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('ProductModel');
    }

    // READ
    public function index()
    {
        $data['products'] = $this->ProductModel->all();

        $this->call->view('products', $data);
    }

    // CREATE PAGE
    public function create()
    {
        $this->call->view('product_create');
    }

    // SAVE PRODUCT
    public function store()
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        ];

        $this->ProductModel->insert($data);

        header('Location: /products');
        exit;
    }

    // EDIT PAGE
    public function edit($id)
    {
        $data['product'] = $this->ProductModel->find($id);

        $this->call->view('product_edit', $data);
    }

    // UPDATE PRODUCT
    public function update($id)
    {
        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        ];

        $this->ProductModel->update($id, $data);

        header('Location: /products');
        exit;
    }

    public function delete($id)
{
    $this->ProductModel->delete($id);

    header('Location: /products');
    exit;
}
}