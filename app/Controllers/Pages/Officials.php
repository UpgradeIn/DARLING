<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Officials extends BaseController
{
    public function dashboard()
    {
        return redirect()->to('/');
    }
}
