<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SiteController extends BaseController
{
    public function index()
    {
        return view('index');
    }
}
