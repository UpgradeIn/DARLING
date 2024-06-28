<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\LearningPathCourseModel;
use App\Models\UserCourseModel;
use App\Models\UsersModel;
use App\Models\LearningPathModel;
use App\Models\OptionTestModel;
use App\Models\UserLearningPathModel;
use App\Models\UserSubCourseModel;
use App\Models\UserAnswerModel;
use App\Models\RequestLearningPathModel;
use App\Models\SubcourseModel;
use App\Models\TestMaterialModel;
use App\Models\VideoMaterialModel;
use App\Models\WrittenMaterialModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $session;
    protected $user_course_model;
    protected $learning_path_model;
    protected $course_model;
    protected $subcourse_model;
    protected $user_learning_path_model;
    protected $learning_path_course_model;
    protected $request_learning_path_model;
    protected $video_material_model;
    protected $written_material_model;
    protected $test_material_model;
    protected $option_test_model;

    public function __construct()
    {
        $this->session = session();
        $this->user_course_model = new UserCourseModel();
        $this->learning_path_model = new LearningPathModel();
        $this->course_model = new CourseModel();
        $this->subcourse_model = new SubcourseModel();
        $this->user_learning_path_model = new UserLearningPathModel();
        $this->learning_path_course_model = new LearningPathCourseModel();
        $this->request_learning_path_model = new RequestLearningPathModel();
        $this->video_material_model = new VideoMaterialModel();
        $this->written_material_model = new WrittenMaterialModel();
        $this->test_material_model = new TestMaterialModel();
        $this->option_test_model = new OptionTestModel();
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
        $course = $this->course_model->where('slug', $slug)->first();
        $subcourse = $this->subcourse_model->where('course_id', $course['id'])->first();
        if (!$subcourse) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $pre_test = $this->subcourse_model->where('course_id', $course['id'])->where('sequence', 1)->first();
        return redirect()->to("/course/$slug/sub/".$pre_test['id']);
    }

    public function subCourse($slug, $id)
    {
        $user_learning_path = $this->user_learning_path_model->where('user_id', session('id'))->where('learning_path_id', $id)->first();
        if (!$user_learning_path) {
            $this->session->setFlashdata('msg-failed', 'Anda belum terdaftar pada learning path ini');
            return redirect()->back();
        }
        $course = $this->course_model->where('slug', $slug)->first();
        $allSubcourse = $this->subcourse_model->where('course_id', $course['id'])->findAll();
        $subcourse = $this->subcourse_model->where('id', $id)->first();
        if ($subcourse['course_id'] != $course['id']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $type_subcourse = $subcourse['type'];
        switch ($type_subcourse) {
            case 'video':
                $video = $this->video_material_model->where('subcourse_id', $id)->first();
                $content = $video['video_url'];
                break;
            case 'written':
                $written = $this->written_material_model->where('subcourse_id', $id)->first();
                $content = $written['content'];
                break;
            case 'test':
                $builder = $this->test_material_model->builder();
                $builder->select('tb_test_materials.*, tb_option_tests.id as option_id, tb_option_tests.answer as option_text');
                $builder->join('tb_option_tests', 'tb_test_materials.id = tb_option_tests.test_material_id');
                $builder->where('tb_test_materials.subcourse_id', $id);
                $builder->orderBy('tb_test_materials.sequence', 'ASC');

                $result = $builder->get()->getResult();

                $test_materials = [];

                foreach ($result as $row) {
                    $test_material_id = $row->id; // Assuming 'id' is the primary key for test_material

                    if (!isset($test_materials[$test_material_id])) {
                        $test_materials[$test_material_id] = [
                            'id' => $row->id,
                            'content' => $row->content,
                            'sequence' => $row->sequence,
                            'subcourse_id' => $row->subcourse_id,
                            'options' => []
                        ];
                    }

                    $test_materials[$test_material_id]['options'][] = [
                        'option_id' => $row->option_id,
                        'option_text' => $row->option_text
                    ];
                }
                $content = $test_materials;
                break;
            default:
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                break;
        }
        // dd($content);
        $data = [
            'slug' => $slug,
            'id' => $id,
            'title' => $subcourse['title'],
            'type' => $subcourse['type'],
            'allSubcourse' => $allSubcourse,
            'content' => $content
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
        $learning_path_courses = $this->learning_path_course_model->getLearningPathCoursesForUserPage($learning_path['id']);
        // dd($learning_path_courses);
        $request_learning_path = $this->request_learning_path_model->where('user_id', session('id'))->where('learning_path_id', $learning_path['id'])->first();
        $user_learning_path = $this->user_learning_path_model->where('user_id', session('id'))->where('learning_path_id', $learning_path['id'])->first();
        $data = [
            'learning_path' => $learning_path,
            'learning_path_courses' => $learning_path_courses,
            'status_request' => $request_learning_path != null ? $request_learning_path['status'] : null,
            'is_has_learning_path' => $user_learning_path != null ? true : false,
        ];  
        return view('user/detail-learning-path', $data);
    }
}
