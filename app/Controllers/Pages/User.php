<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Models\LearningPathModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $session;
    protected $learningPathModel;

    public function __construct()
    {
        $this->session = session();
        $this->learningPathModel = new LearningPathModel();
    }

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
        $learning_paths = $this->learningPathModel->findAll();
        $data = [
            'learning_paths' => $learning_paths
        ];

        return view('user/learning-path', $data);
    }

    public function detailLearningPath($slug)
    {
        $learning_path = $this->learningPathModel->where('slug', $slug)->first();
        $data = [
            'learning_path' => $learning_path
        ];   
        return view('user/detail-learning-path', $data);
    }
}
