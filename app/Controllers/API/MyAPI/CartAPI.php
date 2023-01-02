<?php

namespace App\Controllers\API\MyAPI;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CustomerModel;
use App\Models\MenuModel;
use App\Models\CartModel;

class CartAPI extends ResourceController
{
    use ResponseTrait;

    protected $CustomerModel;
    protected $MenuModel;
    protected $CartModel;

    public function __construct()
    {
        $this->CustomerModel = new CustomerModel();
        $this->MenuModel = new MenuModel();
        $this->CartModel = new CartModel();
    }

    public function index()
    {
        $data = $this->CartModel->select('cart.id, cart.customer_id, cart.product_id, product.name AS product_name, cart.quantity, product.price AS price_product, cart.last_update, cart.status_cart')
            ->join('product', 'cart.product_id = product.product_id')->orderBy('last_update')->findAll();

        return $this->respond($data);
    }

    public function show($id = null)
    {
        $data = $this->CartModel->select('cart.customer_id, cart.product_id, product.name AS product_name, cart.quantity, product.price AS price_product, cart.last_update, cart.status_cart')
            ->join('product', 'cart.product_id = product.product_id')->where('id', $id)->orderBy('id')->findAll();

        if ($data) {
            return $this->respond($data);
        } else {
            $this->failNotFound('Tidak Ada Data dengan ID ' . $id);
        }
    }

    public function create()
    {
        $jsonData = $this->request->getJSON();
        if ($jsonData) {
            $data = [
                'customer_id' => $jsonData->customer_id,
                'product_id' => $jsonData->product_id,
                'quantity' => $jsonData->quantity,
                'status_cart' => $jsonData->status_cart,
            ];
        } else {
            $data = [
                'customer_id' => $this->request->getVar('customer_id'),
                'product_id' => $this->request->getVar('product_id'),
                'quantity' => $this->request->getVar('quantity'),
                'status_cart' => $this->request->getVar('status_cart'),
            ];
        }

        $this->CartModel->insert($data);
        $data = json_decode(file_get_contents("php://input"));
        if ($data) {
            $response = [
                'status' => 201,
                'error' => null,
                'messages' => [
                    'success' => 'Data Saved'
                ],
                'data' => $data
            ];
        } else {
            $response = [
                'status' => 400
            ];
        }

        return $this->respondCreated($response);
    }

    public function update($id = null)
    {
        $jsonData = $this->request->getJSON();
        if ($jsonData) {
            $data = [
                'customer_id' => $jsonData->customer_id,
                'product_id' => $jsonData->product_id,
                'quantity' => $jsonData->quantity,
                'status_cart' => $jsonData->status_cart,
            ];
        } else {
            $input = $this->request->getRawInput();
            $data = [
                'customer_id' => $input['customer_id'],
                'product_id' => $input['product_id'],
                'quantity' => $input['quantity'],
                'status_cart' => $input['status_cart'],
            ];
        }

        $this->CartModel->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Telah Diupdate'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $data = $this->CartModel->find($id);
        if ($data) {
            $this->CartModel->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Telah Dihapus'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Tidak Ada Data dengan ID ' . $id);
        }
    }
}
