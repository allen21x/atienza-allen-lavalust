public function __construct()
{
    parent::__construct();

    $this->call->library('api');
    $this->call->model('ProductModel');

    $this->api->require_jwt();
}