<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function home()
    {
        return redirect()->to('/');
    }

    public function course()
    {
        return view('user/course');
    }
}
