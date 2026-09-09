<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('AuthModel');
    }

    // Show login page
    public function login()
    {
        $this->call->view('login');
    }

    // Process login
    public function authenticate()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->AuthModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header('Location: /products');
            exit;
        }

        // Wrong username or password
        $_SESSION['error'] = "Invalid username or password!";

        header('Location: /login');
        exit;
    }

    // Logout
    public function logout()
    {
        session_destroy();

        header('Location: /login');
        exit;
    }

    // Show register page
    public function register()
    {
        $this->call->view('register');
    }

    // Save registered user
    public function store()
    {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'password' => $password
        ];

        $this->AuthModel->insert($data);

        header('Location: /login');
        exit;
    }
}