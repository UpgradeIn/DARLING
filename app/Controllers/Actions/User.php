<?php

namespace App\Controllers\Actions;

use App\Controllers\BaseController;
use App\Models\RequestLearningPathModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\UserSubCourseModel;
use App\Models\UserAnswerModel;

class User extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
    }
    //leraning path
    public function getLearningPathsByUserID() // get learning path by user id
    {
    }

    public function getLearningPathBySlug($slug) // get learning path by slug and get all courses in learning path
    {
    }

    public function getAllLearningPaths() // get all learning paths
    {
    }

    public function startLearningPath($slug) // start learning path by slug
    {
    }

    // courses
    public function getCourseBySlug($slug) // get course by slug and get all sub courses in course
    {
    }


    // sub courses
    public function getSubCourseById($slug, $id) // get sub course by slug
    {
    }

    public function statusSubCourse($id) // start sub course by slug
    {
        $rules = [
            'status' => 'required',
            'slug' => 'required'
        ];

        if ($this->validate($rules)) {
            $userModel = new UsersModel();
            $email = session('email');
            $user = $userModel->where('email', $email)
                ->first();

            $subcourse_model = new UserSubCourseModel();

            $data = [
                'user_id' => $user['id'],
                'subcourse_id' => $id,
                'status' => $this->request->getVar('status')
            ];

            $subcourse_model->save($data);
        } else {
            $data['validation'] = $this->validator;
            $slug = $this->request->getVar('slug');
            return view(`course/$slug`, $data);
        }
    }

    public function saveTestAnswer($id) // save answer for sub course
    {
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('userAnswers');
        $contentArray = json_decode($jsonData, true);
        $validationData = ['contentArray' => $contentArray];
        $rules = [
            'contentArray.*.test_material_id' => 'required|numeric',
            'contentArray.*.option_test_id' => 'required|numeric',
        ];
        if ($this->validateData($validationData, $rules)) {
            $model = new UserAnswerModel();
            foreach ($contentArray as $testAnswer) {
                $data = [
                    'user_id' => session('id'),
                    'test_material_id' => $testAnswer['test_material_id'],
                    'option_test_id' => $testAnswer['option_test_id'],
                ];
                $model->save($data);
            }
        } else {
            $data['validation'] = $this->validator;
            return view(`course/$id`, $data);
        }
    }

    public function updateTestAnswer($id) // update answer for sub course
    {
    }



    // request learning path
    public function requestLearningPath($slug)
    {
        $rules = [
            'message' => 'required',
        ];

        if ($this->validate($rules)) {
            $userModel = new UsersModel();
            $email = session('email');
            $user = $userModel->where('email', $email)
                ->first();

            $requestLearningPathModel = new RequestLearningPathModel();

            $data = [
                'user_id' => $user['id'],
                'learning_path_id' => $slug,
                'status' => 'pending',
                'message' => $this->request->getVar('message')
            ];

            $this->session->setFlashdata('msg', 'Request Learning Path Success');
            $requestLearningPathModel->save($data);
        } else {
            $data['validation'] = $this->validator;
            return redirect()->back()->withInput($data);
        }
    }
}
