<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Profile extends BaseController
{
    public function profile()
    {
        return redirect()->to('profile/my-profile');
    }

    public function myProfile()
    {
        return view('profile/my-profile');
    }

    public function myActivity()
    {
        return view('profile/my-activity');
    }
}
