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

    public function my_profile()
    {
        return view('profile/my-profile');
    }

    public function my_activity()
    {
        return view('profile/my-activity');
    }
}
