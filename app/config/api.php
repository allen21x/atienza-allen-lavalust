<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$config['api_helper_enabled'] = TRUE;
$config['payload_token_expiration'] = 900;
$config['refresh_token_expiration'] = 604800;

$config['jwt_secret'] = getenv('JWT_SECRET') ?: '';
$config['refresh_token_key'] = getenv('REFRESH_TOKEN_KEY') ?: '';

$config['jwt_verify_user'] = TRUE;
$config['users_table'] = 'users';

$config['allow_origin'] = 'https://atienza-allen-react.onrender.com';

$config['refresh_token_table'] = 'refresh_tokens';

$config['jwt_issuer'] = 'your-app';
$config['jwt_audience'] = 'your-app-clients';

$config['rate_limit_enabled'] = TRUE;
$config['rate_limit_requests'] = 60;
$config['rate_limit_seconds'] = 60;
