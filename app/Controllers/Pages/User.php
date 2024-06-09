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
    
    public function detailCourse($slug)
    {
        $pre_test_id = 1;
        return redirect()->to("/course/$slug/sub/$pre_test_id");
    }

    public function subCourse($slug, $id)
    {
        $data = [
            'slug' => $slug,
            'id' => $id
        ];
        return view('user/sub-course', $data);
    }

    public function learningPath()
    {
        return view('user/learning-path');
    }

    public function detailLearningPath($slug)
    {
        return view('user/detail-learning-path');
    }
}
