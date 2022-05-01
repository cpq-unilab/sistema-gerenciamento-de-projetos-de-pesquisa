<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataFromSigaa extends Controller
{
    private $client = null;
    private $baseUrl = null;

    public function __construct()
    {
        $this->baseUrl = env('DATA_FROM_SIGAA_BASE_URL');
        $this->client = new Client([
                'verify' => false,
                'headers' => [
                    'key' => env('DATA_FROM_SIGAA_KEY'),
                    'Accept'     => 'application/json',
                ],
            ]);
    }

    public function allNotices()
    {
        $response = $this->client->get($this->baseUrl . '/notices') ;
        $notices = json_decode($response->getBody()->getContents());
        return $notices;
    }
}
