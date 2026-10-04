<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthApiController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->library('api');
        $this->call->model('AuthModel');
    }

    public function login()
    {
        $data = $this->api->body();

        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';

        if (empty($username) || empty($password)) {
            $this->api->respond_error(
                'Username and password are required.',
                400
            );
            return;
        }

        // Use the same authentication method as the normal web login
        $user = $this->AuthModel->getUserByUsername($username);

        if (!$user || !password_verify($password, $user['password'])) {
            $this->api->respond_error(
                'Invalid username or password.',
                401
            );
            return;
        }

        // Create JWT tokens
        $tokens = $this->api->issue_tokens([
            'id'       => $user['id'],
            'username' => $user['username']
        ]);

        $this->api->respond([
            'status'  => true,
            'message' => 'Login successful.',
            'user'    => [
                'id'       => $user['id'],
                'username' => $user['username']
            ],
            'tokens' => $tokens
        ], 200);
    }

    public function logout()
    {
        $data = $this->api->body();

        $refresh_token = $data['refresh_token'] ?? '';

        if (!empty($refresh_token)) {
            $this->api->revoke_refresh_token($refresh_token);
        }

        $this->api->respond([
            'status'  => true,
            'message' => 'Logout successful.'
        ], 200);
    }
}