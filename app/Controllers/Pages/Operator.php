<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\LearningPathModel;
use App\Models\SubcourseModel;
use CodeIgniter\HTTP\ResponseInterface;

class Operator extends BaseController
{
    protected $session;
    protected $courseModel;
    protected $learningPathsModel;
    protected $subcourseModel;

    public  function __construct()
    {
        $this->session = session();
        $this->courseModel = new CourseModel();
        $this->learningPathsModel = new LearningPathModel();
        $this->subcourseModel = new SubcourseModel();   
    }

    public function dashboard()
    {
        return redirect()->to('/');
    }

    public function manageAssigmentRequest()
    {
        return redirect()->to('operator/manage-assigment');
    }

    public function detailAssigment($id)
    {
        return view('operator/detail-assigment');
    }

    public function detailRequest($id)
    {
        return view('operator/detail-request');
    }

    public function detailLearningPath($slug)
    {
        $learningPaths = $this->learningPathsModel->where('slug', $slug)->first();
        if (!$learningPaths) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        // $courses = $this->courseModel->where('learning_path_id', $learningPaths['id'])->orderBy('sequence', 'ASC')->findAll();
        $data = [
            'learningPaths' => $learningPaths
            // 'courses' => $courses
        ];
        return view('operator/detail-learning-path', $data);
    }

    public function manageCourse()
    {
        $courses = $this->courseModel->findAll();
        $learningPaths = $this->learningPathsModel->findAll();

        $data = [
            'courses' => $courses,
            'learningPaths' => $learningPaths
        ];
        return view('operator/manage-course', $data);
    }

    public function detailCourse($slug)
    {
        $course = $this->courseModel->where('slug', $slug)->first();
        if (!$course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $subcourses = $this->subcourseModel->where('course_id', $course['id'])->orderBy('sequence', 'ASC')->findAll();
        $data = [
            'course' => $course,
            'subcourses' => $subcourses
        ];
        // dd($data);
        return view('operator/detail-course', $data);
    }
    
    public function addPreTest()
    {
        return view('operator/add-pre-test');
    }

    public function editPreTest($id)
    {
        return view('operator/edit-pre-test');
    }

    public function addPostTest()
    {
        return view('operator/add-post-test');
    }

    public function editPostTest($id)
    {
        return view('operator/edit-post-test');
    }
}