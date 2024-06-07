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
        // select * from course where slug = $slug
        // select * from sub_course where course_id = $course_id
        $id_subcourse = 1;
        return redirect()->to("course/$slug/sub/$id_subcourse");;
    }

    public function subCourse($slug, $id)
    {
        return view('user/sub-course');
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
