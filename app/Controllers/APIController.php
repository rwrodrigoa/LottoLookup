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

    public function draw($draw, $number = null)
    {
        $drawResultModel = new DrawResultModel();
        $drawResultModel = $drawResultModel->where('draw_type', $draw);
    
        if (isset($number)) {
            $drawResultModel = $drawResultModel->where('draw_number', $number)->orderBy('draw_date', 'desc')->first();
    
            if (!$drawResultModel) {
                return $this->respond(['erro' => 'Nenhum resultado encontrado.'], 404);
            }
    
            $data = json_decode($drawResultModel->draw_result, true);
        } else {
            $drawResultModel = $drawResultModel->orderBy('draw_date', 'desc')->findAll(10);
            $data = [];
    
            foreach ($drawResultModel as $draw) {
                $data[$draw->draw_number] = json_decode($draw->draw_result, true);
            }
        }
    
        return $this->respond($data, 200);
    }

    public function latest($draw)
    {
        $drawResultModel = new DrawResultModel();
        $drawResult = $drawResultModel
            ->where('draw_type', $draw)
            ->orderBy('draw_date', 'desc')
            ->first();
    
        if ($drawResult) {
            $data = json_decode($drawResult->draw_result, true);
        } else {
            $data = ['erro' => 'Nenhum resultado encontrado.'];
        }
    
        return $this->respond($data, 200);
    }
}
