<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataFromSigaa extends Controller
{
    private $client = null;

    public function __construct()
    {
        $this->client = new Client([
                'base_uri' => env('DATA_FROM_SIGAA_BASE_URL'),
                'verify' => false,
                'headers' => [
                    'key' => env('DATA_FROM_SIGAA_KEY'),
                    'Accept'     => 'application/json',
                ],
            ]);
    }

    public function allNotices()
    {
        $response = $this->client->get('notices') ;
        $notices = json_decode($response->getBody()->getContents());
        return $notices;
    }
}
