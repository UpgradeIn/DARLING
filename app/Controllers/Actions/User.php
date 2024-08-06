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
    protected $learningPathModel;
    protected $userLearningPathModel;
    protected $requestLearningPathModel;
    protected $userAnswerModel;
    protected $userSubCourseModel;

    public function __construct()
    {
        $this->session = session();
        $this->learningPathModel = new LearningPathModel();
        $this->userLearningPathModel = new UserLearningPathModel();
        $this->requestLearningPathModel = new RequestLearningPathModel();
        $this->userAnswerModel = new UserAnswerModel();
        $this->userSubCourseModel = new UserSubCourseModel();
    }

    public function startCoures($slug, $id) // start learning path by slug
    {
        
    }

    // sub courses

    public function statusSubCourse($id) // start sub course by slug
    {
        // set validation rules
        $rules = [
            'status' => 'required',
            'slug' => 'required'
        ];

        // check validation
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            $slug = $this->request->getVar('slug');
            return view(`course/$slug`, $data);
        }

        // set ?
        $data = [
            'user_id' => session('id'),
            'subcourse_id' => $id,
            'status' => $this->request->getVar('status'),
        ];

        // add status user sub course ?
        $this->userSubCourseModel->save($data);

        // return ?
    }

    public function saveTestAnswer($id) // save answer for sub course
    {
        // get request json data
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('userAnswers');

        // decode json data
        $contentArray = json_decode($jsonData, true);

        // set validation data
        $validationData = ['contentArray' => $contentArray];

        // set validation rules
        $rules = [
            'contentArray.*.test_material_id' => 'required|numeric',
            'contentArray.*.option_test_id' => 'required|numeric',
        ];

        // check validation
        if (!$this->validateData($validationData, $rules)) {
            $data['validation'] = $this->validator;
            return view(`course/$id`, $data);
        }

        // add test answer
        foreach ($contentArray as $testAnswer) {
            $data = [
                'user_id' => session('id'),
                'test_material_id' => $testAnswer['test_material_id'],
                'option_test_id' => $testAnswer['option_test_id'],
            ];
            $this->userAnswerModel->save($data);
        }

        // return ?
    }

    // request learning path
    public function requestLearningPath($slug)
    {
        // get user session id
        $user_id = session('id');

        // check user learning path
        $user_learning_path = $this->userLearningPathModel->where('user_id', $user_id)->first();
        if ($user_learning_path != null && $user_learning_path['status'] != 'completed') {
            $this->session->setFlashdata('msg-failed', 'Kamu sudah memiliki learning path');
            return redirect()->back();
        }

        // check user request
        $user_request = $this->requestLearningPathModel->where('user_id', $user_id)->first();
        if ($user_request != null && $user_request['status'] != 'rejected') {
            $this->session->setFlashdata('msg-failed', 'Kamu sudah sedang mengajukan learning path lain');
            return redirect()->back();
        }

        // set validation rules
        $rules = [
            'message' => 'required',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return redirect()->back()->withInput($data);
        }

        // get learning path by slug
        $learning_path = $this->learningPathModel->where('slug', $slug)->first();

        // set data for add request learning path
        $data = [
            'user_id' => $user_id,
            'learning_path_id' => $learning_path['id'],
            'status' => 'pending',
            'message' => $this->request->getVar('message')
        ];

        // add request learning path
        $this->requestLearningPathModel->save($data);

        // redirect to previous page
        $this->session->setFlashdata('msg', 'Request Learning Path Success');
        return redirect()->back();
    }
}
