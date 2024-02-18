<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class ApiHelper
{

    protected $client;

    public $draws = [
        "maismilionaria",
        "megasena",
        "lotofacil",
        "quina",
        "lotomania",
        "timemania",
        "duplasena",
        "federal",
        "diadesorte",
        "supersete"
    ];

    public function __construct()
    {
        $this->client = new Client(['verify' => false]);
    }
 
    public function fetchDataFromApi($url)
    {
        $response = $this->client->get($url);
        
        $data = json_decode($response->getBody()->getContents(), true);

        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            die('Erro ao decodificar JSON: ' . json_last_error_msg());
        }

        return $data;
    }
    
}