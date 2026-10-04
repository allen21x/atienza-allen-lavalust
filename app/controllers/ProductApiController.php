
public function index()
{
    $this->api->respond([
        'status'  => true,
        'message' => 'JWT authentication works!',
        'data'    => []
    ], 200);
}

