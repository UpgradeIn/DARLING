<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\LearningPathCourseModel;
use App\Models\UserCourseModel;
use App\Models\UsersModel;
use App\Models\LearningPathModel;
use App\Models\UserLearningPathModel;
use App\Models\UserSubCourseModel;
use App\Models\UserAnswerModel;
use App\Models\RequestLearningPathModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $user_course_model;
    protected $learning_path_model;
    protected $course_model;
    protected $user_learning_path_model;
    protected $learning_path_course_model;
    protected $request_learning_path_model;

    public function __construct()
    {
        $this->course_model = new CourseModel();
        $this->user_course_model = new UserCourseModel();
        $this->learning_path_model = new LearningPathModel();
        $this->learning_path_course_model = new LearningPathCourseModel();
        $this->user_learning_path_model = new UserLearningPathModel();
        $this->request_learning_path_model = new RequestLearningPathModel();
    }

    public function home()
    {
        return redirect()->to('/');
    }

    public function detailNews($slug)
    {
        $data = [
            'slug' => $slug
        ];
        return view('user/detail-news', $data);
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
        
        $data_learning_path = $this->learning_path_model->findAll();
        
        $data = [
            'data_learning_path' => $data_learning_path
        ];
        
        return view('user/learning-path', $data);
    }

    public function learningPathByUserId()
    {
        $user_id = session('id');
        $builder = $this->learning_path_model;
        $builder->select('tb_learning_paths.*');
        $builder->join('tb_user_learning_paths', 'tb_user_learning_paths.learning_path_id = tb_learning_paths.id');
        $builder->where('tb_learning_paths.status', 'publish');
        $builder->where('tb_user_learning_paths.user_id', $user_id);
        $data_learning_path = $builder->get()->getResultArray();
        // dd($data_learning_path);
        $data = [
            'data_learning_path' => $data_learning_path
        ];
        
        return view('user/my-learning-path', $data);
    }

    public function detailLearningPath($slug)
    {
        $learning_path = $this->learning_path_model->where('slug', $slug)->first();
        $request_learning_path = $this->request_learning_path_model->where('user_id', session('id'))->where('learning_path_id', $learning_path['id'])->first();
        $data = [
            'learning_path' => $learning_path,
            'status' => $request_learning_path != null ? $request_learning_path['status'] : null
        ];   
        return view('user/detail-learning-path', $data);
    }
}
