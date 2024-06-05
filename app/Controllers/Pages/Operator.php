<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Operator extends BaseController
{
    public function dashboard()
    {
        return redirect()->to('/');
    }

    public function manage_course()
    {
        return view('operator/manage-course');
    }
}
