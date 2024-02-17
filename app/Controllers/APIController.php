<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class APIController extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {
        $data = [
            'title' => 'LottoLookup, as seguintes opções estão disponíveis:',
            'options' => [
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
            ]
        ];

        return $this->respond($data, 200);
    }
}
