
<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductApiController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('api');
        $this->call->model('ProductModel');

        // Require JWT authentication
        $this->api->require_jwt();
    }

    // GET /api/products
    public function index()
    {
        $products = $this->ProductModel->get_all();

        $this->api->respond([
            'status'  => true,
            'message' => 'Products retrieved successfully.',
            'data'    => $products
        ], 200);
    }

    // GET /api/products/{id}
    public function show($id)
    {
        $product = $this->ProductModel->get_by_id($id);

        if (!$product) {
            $this->api->respond_error(
                'Product not found.',
                404
            );
            return;
        }

        $this->api->respond([
            'status'  => true,
            'message' => 'Product retrieved successfully.',
            'data'    => $product
        ], 200);
    }

    // POST /api/products
    public function store()
    {
        $data = $this->api->body();

        $product_name = $data['product_name'] ?? '';

        if (empty($product_name)) {
            $this->api->respond_error(
                'Product name is required.',
                400
            );
            return;
        }

        $product_data = [
            'product_name' => $data['product_name'] ?? '',
            'description'  => $data['description'] ?? '',
            'price'        => $data['price'] ?? 0,
            'quantity'     => $data['quantity'] ?? 0
        ];

        $result = $this->ProductModel->create($product_data);

        if ($result) {
            $this->api->respond([
                'status'  => true,
                'message' => 'Product created successfully.'
            ], 201);
            return;
        }

        $this->api->respond_error(
            'Failed to create product.',
            500
        );
    }

    // PUT /api/products/{id}
    public function update($id)
    {
        $product = $this->ProductModel->get_by_id($id);

        if (!$product) {
            $this->api->respond_error(
                'Product not found.',
                404
            );
            return;
        }

        $data = $this->api->body();

        $product_data = [
            'product_name' => $data['product_name'] ?? '',
            'description'  => $data['description'] ?? '',
            'price'        => $data['price'] ?? 0,
            'quantity'     => $data['quantity'] ?? 0
        ];

        $result = $this->ProductModel->update(
            $id,
            $product_data
        );

        if ($result) {
            $this->api->respond([
                'status'  => true,
                'message' => 'Product updated successfully.'
            ], 200);
            return;
        }

        $this->api->respond_error(
            'Failed to update product.',
            500
        );
    }

    // DELETE /api/products/{id}
    public function delete($id)
    {
        $product = $this->ProductModel->get_by_id($id);

        if (!$product) {
            $this->api->respond_error(
                'Product not found.',
                404
            );
            return;
        }

        $result = $this->ProductModel->delete($id);

        if ($result) {
            $this->api->respond([
                'status'  => true,
                'message' => 'Product deleted successfully.'
            ], 200);
            return;
        }

        $this->api->respond_error(
            'Failed to delete product.',
            500
        );
    }
}

