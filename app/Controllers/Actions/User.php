<?php

namespace App\Controllers\Actions;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LearningPathModel;
use App\Models\UserSubCourseModel;
use App\Models\UserAnswerModel;
use App\Models\RequestLearningPathModel;
use App\Models\UserLearningPathModel;

class User extends BaseController
{
    protected $session;
    protected $learning_path_model;
    protected $user_learning_path_model;
    protected $request_learning_path_model;
    protected $user_answer_model;

    public function __construct()
    {
        $this->session = session();
        $this->learning_path_model = new LearningPathModel();
        $this->user_learning_path_model = new UserLearningPathModel();
        $this->request_learning_path_model = new RequestLearningPathModel();
        $this->user_answer_model = new UserAnswerModel();
    }

    public function startCoures($slug, $id) // start learning path by slug
    {
        
    }

    // sub courses

    public function statusSubCourse($id) // start sub course by slug
    {
        $rules = [
            'status' => 'required',
            'slug' => 'required'
        ];

        if ($this->validate($rules)) {
            $user_sub_course_model = new UserSubCourseModel();

            $data = [
                'user_id' => session('id'),
                'subcourse_id' => $id,
                'status' => $this->request->getVar('status')
            ];

            $user_sub_course_model->save($data);
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
            foreach ($contentArray as $testAnswer) {
                $data = [
                    'user_id' => session('id'),
                    'test_material_id' => $testAnswer['test_material_id'],
                    'option_test_id' => $testAnswer['option_test_id'],
                ];
                $this->user_answer_model->save($data);
            }
        } else {
            $data['validation'] = $this->validator;
            return view(`course/$id`, $data);
        }
    }

    // request learning path
    public function requestLearningPath($slug)
    {
        $user_id = session('id');
        $user_learning_path = $this->user_learning_path_model->where('user_id', $user_id)->first();
        if ($user_learning_path != null && $user_learning_path['status'] != 'completed') {
            $this->session->setFlashdata('msg-failed', 'Kamu sudah memiliki learning path');
            return redirect()->back();
        }
        $user_request = $this->request_learning_path_model->where('user_id', $user_id)->first();
        if ($user_request != null && $user_request['status'] != 'rejected') {
            $this->session->setFlashdata('msg-failed', 'Kamu sudah sedang mengajukan learning path lain');
            return redirect()->back();
        }
        $rules = [
            'message' => 'required',
        ];

        if ($this->validate($rules)) {
            $learning_path = $this->learning_path_model->where('slug', $slug)->first();

            $data = [
                'user_id' => $user_id,
                'learning_path_id' => $learning_path['id'],
                'status' => 'pending',
                'message' => $this->request->getVar('message')
            ];
            $this->request_learning_path_model->save($data);

            $this->session->setFlashdata('msg', 'Request Learning Path Success');
            return redirect()->back();
        } else {
            $data['validation'] = $this->validator;
            return redirect()->back()->withInput($data);
        }
    }
}
