<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Helpers\ApiHelper;
use App\Models\DrawResultModel;
use CodeIgniter\API\ResponseTrait;

class APIController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $apiHelper = new ApiHelper();
        $drawResultModel = new DrawResultModel();
        $data = [];

        foreach ($apiHelper->draws as $draw) {
            $data[$draw] = json_decode(
                $drawResultModel
                    ->where('draw_type', $draw)
                    ->orderBy('draw_date', 'desc')
                    ->first()
                    ->draw_result,
                true
            );
        }

        return $this->respond($data, 200);
    }
}
