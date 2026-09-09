<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthModel extends Model
{
    protected $table = 'auth_users';
    protected $primary_key = 'id';

    public function getUserByUsername($username)
    {
        return $this->db
            ->table('auth_users')
            ->where('username', $username)
            ->get();
    }
}