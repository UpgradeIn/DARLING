<?php

namespace App\Controllers\Actions;

use App\Controllers\BaseController;
use App\Models\LearningPathModel;
use App\Models\CourseModel;
use App\Models\SubcourseModel;
use App\Models\WrittenMaterialModel;
use App\Models\VideoMaterialModel;
use App\Models\TestMaterialModel;
use App\Models\OptionTestModel;
use App\Models\LearningPathCourseModel;
use App\Models\UserLearningPathModel;
use App\Models\RequestLearningPathModel;
use App\Models\AssignLearningPathModel;
use App\Models\UsersModel;
use App\Models\CategoryModel;
use App\Models\NewsModel;
use App\Models\RoleModel;
use CodeIgniter\I18n\Time;

class Operator extends BaseController
{
    protected $session;
    protected $courseModel;
    protected $learningpathModel;
    protected $newsModel;
    protected $subcourseModel;
    protected $learningPathCourseModel;
    protected $userLearningPathModel;
    protected $usersModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->session = session();
        $this->newsModel = new NewsModel();
        $this->courseModel = new CourseModel();
        $this->learningpathModel = new LearningPathModel();
        $this->subcourseModel = new SubcourseModel();
        $this->learningPathCourseModel = new LearningPathCourseModel();
        $this->userLearningPathModel = new UserLearningPathModel();
        $this->usersModel = new UsersModel();
        $this->categoryModel = new CategoryModel();
    }

    public function createCourse()
    {
        // set validation rules
        $rules = [
            'course_name'          => 'required',
            'course_description'   => 'required',
            'skill_type'           => 'required',
            'course_type'          => 'required',
            'module'               => 'uploaded[module]|max_size[module,5120]',
            'course_thumbnail'     => 'uploaded[course_thumbnail]|max_size[course_thumbnail,5120]|is_image[course_thumbnail]|mime_in[course_thumbnail,image/jpg,image/jpeg,image/png]',
        ];
        
        // check validation
        if (!$this->validate($rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // set course slug
        $slug = url_title($this->request->getVar('course_name'), '-', true);

        // check exist course slug
        if ($this->courseModel->where('slug', $slug)->first() != null) {
            $this->session->setFlashdata('msg-failed', 'Judul course sudah ada');
            return redirect()->to('manage-course');
        }

        // get request file thumbnail and move to folder images-thumbnail
        $thumbnail = $this->request->getFile('course_thumbnail');
        $thumbnail->move('images-thumbnail');

        // get request file module and move to folder module-course
        $module = $this->request->getFile('module');
        $module->move('module-course');

        // set data for add course
        $data = [
            'thumbnail'     => $thumbnail->getName(),
            'name'          => $this->request->getVar('course_name'),
            'slug'          => $slug,
            'description'   => $this->request->getVar('course_description'),
            'module'        => $module->getName(),
            'skill_type'    => $this->request->getVar('skill_type'),
            'course_type'   => $this->request->getVar('course_type'),
            'status'        => 'draft',
            'published_at'  => null,
        ];

        // add course
        $this->courseModel->save($data);

        // redirect to detail course page by slug
        $this->session->setFlashdata('msg', 'Berhasil menambahkan course baru');
        return redirect()->to('detail-course/' . $slug);
    }

    public function updateCourse($id)
    {
        // get course by id
        $course = $this->courseModel->find($id);

        // check exist course
        if ($course == null) {
            $this->session->setFlashdata('msg-failed', 'Course tidak ditemukan');
            return redirect()->back();
        }

        // set validation rules
        $rules = [
            'course_name'          => 'required',
            'course_description'   => 'required',
            'module'               => 'max_size[module,5120]',
            'course_thumbnail'     => 'max_size[course_thumbnail,5120]|is_image[course_thumbnail]|mime_in[course_thumbnail,image/jpg,image/jpeg,image/png]',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // set course slug
        $slug = url_title($this->request->getVar('course_name'), '-', true);

        // check exist course slug
        $exists_slug = $this->courseModel->where('slug', $slug)->first();
        if ($exists_slug != null && $exists_slug['id'] != $id) {
            $this->session->setFlashdata('msg-failed', 'Judul course sudah ada');
            return redirect()->to('detail-course/' . $course['slug']);
        }

        // 
        $thumbnail = $this->request->getFile('course_thumbnail');
        //cek thumbnail lama
        if ($thumbnail->getError() == 4) {
            $nameThumbnail = $this->request->getVar('old_course_thumbnail');
        } else {
            $thumbnail->move('images-thumbnail');
            $nameThumbnail = $thumbnail->getName();
            if ($this->request->getVar('old_course_thumbnail')) {
                if (file_exists('images-thumbnail/' . $this->request->getVar('old_course_thumbnail'))) {
                    if ($this->request->getVar('old_course_thumbnail') != 'base_thumbnail.jpg') {
                        unlink('images-thumbnail/' . $this->request->getVar('old_course_thumbnail'));
                    }
                }
            }
        }

        //
        $module = $this->request->getFile('module');
        //cek module lama
        if ($module->getError() == 4) {
            $nameModule = $this->request->getVar('old_module');
        } else {
            $module->move('module-course');
            $nameModule = $module->getName();
            if ($this->request->getVar('old_module')) {
                if (file_exists('module-course/' . $this->request->getVar('old_module'))) {
                    if ($this->request->getVar('old_module') != 'base_module.pdf') {
                        unlink('module-course/' . $this->request->getVar('old_module'));
                    }
                }
            }
        }

        // set data for update course
        $data = [
            'thumbnail'     => $nameThumbnail,
            'name'          => $this->request->getVar('course_name'),
            'slug'          => $slug,
            'description'   => $this->request->getVar('course_description'),
            'module'        => $nameModule,
            'skill_type'    => $this->request->getVar('skill_type'),
            'course_type'   => $this->request->getVar('course_type'),
            'status'        => 'draft',
            'published_at'  => null,
        ];

        // update course
        $this->courseModel->update($id, $data);

        // redirect to detail course page by slug
        $this->session->setFlashdata('msg', 'Berhasil mengubah course');
        return redirect()->to('detail-course/' . $slug);
    }

    public function deleteCourse($id)
    {
        // get course by id
        $course = $this->courseModel->find($id);

        // check exist course
        if ($course == null) {
            $this->session->setFlashdata('msg-failed', 'Course tidak ditemukan');
            return redirect()->back();
        }
        
        // unlink thumbnail
        if (file_exists('images-thumbnail/' .  $course['thumbnail'])) {
            if ($course['thumbnail'] != 'base_thumbnail.jpg') {
                unlink('images-thumbnail/' . $course['thumbnail']);
            }
        }

        // unlink module
        if (file_exists('module-course/' . $course['module'])) {
            if ($course['module'] != 'base_module.pdf') {
                unlink('module-course/' . $course['module']);
            }
        }

        // delete course by id
        $this->courseModel->delete($id);

        // redirect to manage course page
        $this->session->setFlashdata('msg', 'Berhasil menghapus course');
        return redirect()->to('manage-course');
    }

    public function updateSubcourseSequence() // update urutan subcourse pada course
    {
        // get request data
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('result');

        // decode json data
        $contentArray = json_decode($jsonData, true);

        // set validation data
        $validationData['result'] = $contentArray;

        // set validation rules
        $rules = [
            'result.*.id' => 'required|numeric',
            'result.*.sequence' => 'required|numeric',
        ];

        // check validation
        if (!$this->validateData($validationData, $rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // update subcourse sequence
        foreach ($contentArray as $course) {
            $data = [
                'sequence' => $course['sequence'],
            ];
            $this->subcourseModel->update($course['id'], $data);
        }

        // redirect to previous page
        $this->session->setFlashdata('msg', 'Berhasil mengubah urutan subcourse');
        return redirect()->back();
    }

    // not yet
    public function publishCourse($id)
    {
        // get course by id
        $course = $this->courseModel->find($id);

        // check exist course
        if ($course == null) {
            $this->session->setFlashdata('msg-failed', 'Course tidak ditemukan');
            return redirect()->back();
        }

        // check course publish status
        if ($course['status'] == 'publish') {
            $this->session->setFlashdata('msg-failed', 'Course sudah dipublish');
            return redirect()->back();
        }

        // set data for update course
        $data = [
            'status' => 'publish',
            'published_at' => Time::now(),
        ];

        // update course
        $this->courseModel->update($id, $data);

        // redirect to detail course page by slug
        $this->session->setFlashdata('msg', 'Berhasil mempublish course');
        return redirect()->to('detail-course/' . $course['slug']);
    }

    public function unpublishCourse($id)
    {
        // get course by id
        $course = $this->courseModel->find($id);

        // check exist course
        if ($course == null) {
            $this->session->setFlashdata('msg-failed', 'Course tidak ditemukan');
            return redirect()->back();
        }

        // check course unpublish status
        if ($course['status'] != 'publish') {
            $this->session->setFlashdata('msg-failed', 'Course masih belum dipublish');
            return redirect()->back();
        }

        // set data for update course
        $data = [
            'status' => 'draft',
            'published_at' => null,
        ];

        // update course
        $this->courseModel->update($id, $data);

        // redirect to detail course page by slug
        $this->session->setFlashdata('msg', 'Berhasil mengunpublish course');
        return redirect()->to('detail-course/' . $course['slug']);
    }

    // Sub Courses | not all
    public function createSubCourse()
    {
        // set validation rules
        $validationRules = [
            'course_id' => 'required|numeric',
            'sequence'  => 'required|numeric',
            'type' => 'required|in_list[video,test,written]',
            'content'   => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Konten harus diisi',
                ],
            ],
        ];
        
        // get request data
        $validationData = $this->request->getPost();

        // set type and title
        $type = $this->request->getVar('type');
        $title = $this->request->getVar('title');

        // set validation rules based on 'type'
        switch ($type) {
            case 'video':
                $validationRules['title'] = 'required';
                $validationRules['content'] = 'required|string';
                break;
            case 'written':
                $validationRules['title'] = 'required';
                $validationRules['content'] = 'required|string';
                break;
            case 'test':
                /** @var string|null $jsonData */
                $jsonData = $this->request->getPost('content');
                $contentArray = json_decode($jsonData, true);
                $validationRules['content.dataTest.*.sequence'] = 'required|integer';
                $validationRules['content.dataTest.*.content'] = 'required|string';
                $validationRules['content.dataTest.*.options.*.answer'] = 'required|string';
                $validationRules['content.dataTest.*.options.*.correct'] = 'required|integer';
                $validationRules['content.type_test'] = 'required|in_list[pre_test,post_test]';
                $validationData['content'] = $contentArray;
                $title = ucwords(str_replace("_", " ", $contentArray['type_test']));
                break;
            default:
                break;
        }

        // check validation
        if (!$this->validateData($validationData, $validationRules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // get course by id
        $dataCourse = $this->courseModel->select('slug')->where('id', $this->request->getVar('course_id'))->first();

        // check exist course
        if ($dataCourse == null) {
            $this->session->setFlashdata('msg-failed', 'Course tidak ditemukan');
            return redirect()->back();
        }
        
        // set data for save subcourse
        $data = [
            'course_id' => $this->request->getVar('course_id'),
            'title'     => $title,
            'sequence'  => $this->request->getVar('sequence'),
            'type'      => $type,
        ];

        // save subcourse
        if (!$this->subcourseModel->save($data)) {
            $this->session->setFlashdata('msg-failed', 'Gagal menambahkan subcourse baru');
            return redirect()->to('detail-course/' . $dataCourse['slug']);
        }

        // get inserted subcourse id
        $insertedID = $this->subcourseModel->insertID();

        // set data for save material based on 'type'
        switch ($type) {
            case 'written':
                $testModel = new WrittenMaterialModel();
                $dataMaterial = [
                    'subcourse_id' => $insertedID,
                    'content' => $this->request->getVar('content'),
                ];
                $testModel->save($dataMaterial);
                $this->session->setFlashdata('msg', 'Berhasil menambahkan materi teks baru');
                break;
            case 'video':
                $testModel = new VideoMaterialModel();
                $dataMaterial = [
                    'subcourse_id' => $insertedID,
                    'video_url' => $this->request->getVar('content'),
                ];
                $testModel->save($dataMaterial);
                $this->session->setFlashdata('msg', 'Berhasil menambahkan materi video baru');
                break;
            case 'test':
                $testModel = new TestMaterialModel();
                $optionModel = new OptionTestModel();
                foreach ($validationData['content']['dataTest'] as $key => $content) {
                    $dataMaterial = [
                        'subcourse_id' => $insertedID,
                        'content' => $content['content'],
                        'sequence' => $content['sequence'],
                        'type_test' => $validationData['content']['type_test'],
                    ];
                    $testModel->save($dataMaterial);
                    $insertedMaterialID = $testModel->insertID();
                    foreach ($content['options'] as $key => $option) {
                        $dataOption = [
                            'test_material_id' => $insertedMaterialID,
                            'answer' => $option['answer'],
                            'correct' => $option['correct'],
                        ];
                        $optionModel->save($dataOption);
                    }
                }
                $this->session->setFlashdata('msg', 'Berhasil menambahkan materi test baru');
                break;
            default:
                $this->session->setFlashdata('msg-failed', 'Gagal menambahkan materi baru: tipe ' . $type . ' tidak ditemukan');
                break;
        }

        // redirect to detail course page by slug
        return redirect()->to('detail-course/' . $dataCourse['slug']);
    }

    // not yet
    public function updateSubCourse($id)
    {
        // set validation rules
        $validationRules = [
            'course_id' => 'required|numeric',
            'sequence'  => 'required|numeric',
            'type' => 'required|in_list[video,test,written]',
            'status'    => 'required|in_list[publish,draft]',
            'content'   => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The {field} field is required.'
                ],
            ],
        ];

        // set validation rules
        if (!$this->validate($validationRules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // get course by id
        $dataCourse = $this->courseModel->select('slug')->where('id', $this->request->getVar('course_id'))->first();

        // check exist course
        if ($dataCourse == null) {
            $this->session->setFlashdata('msg-failed', 'Course tidak ditemukan');
            return redirect()->back();
        }

        // get request data
        $validationData = $this->request->getPost();
        
        // set type and title
        $type = $this->request->getVar('type');
        $title = $this->request->getVar('title');

        // save subcourse data based on 'type'
        switch ($type) {
            case 'video':
                // set validation rules
                $validationRules['title'] = 'required';
                $validationRules['content'] = 'required|string';

                // set validation rules
                if (!$this->validate($validationRules)) {
                    $validation = $this->validator;
                    return redirect()->back()->withInput()->with('errors', $validation->getErrors());
                }
                
                // set data for update video material
                $dataMaterial = [
                    'subcourse_id' => $id,
                    'content' => $this->request->getVar('content'),
                    'updated_at'  => Time::now(),
                ];

                // update video material
                $videoModel = new VideoMaterialModel();
                $videoModel->where('subcourse_id', $id)->set($dataMaterial)->update();

                // set flashdata
                $this->session->setFlashdata('msg', 'Berhasil mengubah materi video');
                break;
            case 'written':
                // set validation rules
                $validationRules['title'] = 'required';
                $validationRules['content'] = 'required|string';

                // set validation rules
                if (!$this->validate($validationRules)) {
                    $validation = $this->validator;
                    return redirect()->back()->withInput()->with('errors', $validation->getErrors());
                }

                // set data for update written material
                $dataMaterial = [
                    'subcourse_id' => $id,
                    'content' => $this->request->getVar('content'),
                    'updated_at'  => Time::now(),
                ];

                // update written material
                $writtenModel = new WrittenMaterialModel();
                $writtenModel->where('subcourse_id', $id)->set($dataMaterial)->update();

                // set flashdata
                $this->session->setFlashdata('msg', 'Berhasil mengubah materi teks');
                break;
            case 'test':
                // set validation rules
                $validationRules['content.dataTest.*.sequence'] = 'required|integer';
                $validationRules['content.dataTest.*.content'] = 'required|string';
                $validationRules['content.dataTest.*.options.*.answer'] = 'required|string';
                $validationRules['content.dataTest.*.options.*.correct'] = 'required|integer';
                $validationRules['content.type_test'] = 'required|in_list[pre_test,post_test]';
                
                // check validation
                if (!$this->validateData($validationData, $validationRules)) {
                    $validation = $this->validator;
                    return redirect()->back()->withInput()->with('errors', $validation->getErrors());
                }

                // get request data
                /** @var string|null $jsonData */
                $jsonData = $this->request->getPost('content');

                // decode json data
                $contentArray = json_decode($jsonData, true);

                // set validation data
                $validationData['content'] = $contentArray;

                // set title
                $title = ucwords(str_replace("_", " ", $contentArray['type_test']));

                // get test material
                $testModel = new TestMaterialModel();
                $material = $testModel->where('subcourse_id', $id)->first();

                // get options
                $optionModel = new OptionTestModel();
                $options = $optionModel->where('test_material_id', $material['id'])->findAll();

                // delete options
                foreach ($options as $o) {
                    $optionModel->delete($o['id']);
                }

                // delete test material
                $testModel->delete($material['id']);
        
                // set data for update test material
                $dataMaterial = [
                    'subcourse_id' => $id,
                    'content' => $validationData['content']['content'],
                    'sequence' => $validationData['content']['sequence'],
                    'type_test' => $validationData['content']['type_test'],
                    'created_at'  => Time::now(),
                    'updated_at'  => Time::now(),
                ];
        
                // add test material
                $testModel->save($dataMaterial);

                // get inserted test id
                $insertedMaterialID = $testModel->insertID();

                // add options
                foreach ($validationData['content']['options'] as $key => $option) {
                    $dataOption = [
                        'test_material_id' => $insertedMaterialID,
                        'answer' => $option['answer'],
                        'correct' => $option['correct'],
                        'created_at'  => Time::now(),
                        'updated_at'  => Time::now(),
                    ];
                    $optionModel->save($dataOption);
                }

                // set flashdata
                $this->session->setFlashdata('msg', 'Berhasil mengubah materi test');
                break;
            default:
                $this->session->setFlashdata('msg-failed', 'Gagal mengubah materi: tipe' . $type . 'tidak ditemukan');
                break;
        }

        // set data for update subcourse
        $data = [
            'course_id' => $this->request->getVar('course_id'),
            'title'     => $title,
            'sequence'  => $this->request->getVar('sequence'),
            'type'      => $this->request->getVar('type'),
            'status'    => $this->request->getVar('status'),
            'updated_at'  => Time::now(),
        ];
        
        // update subcourse
        $this->subcourseModel->update($id, $data);

        // redirect to detail course page by slug
        return redirect()->to('detail-course/' . $dataCourse['slug']);
    }

    // not yet
    public function deleteSubCourse($id)
    {
        // find subcourse by id
        $subcourse = $this->subcourseModel->find($id);

        // check exist subcourse
        if ($subcourse == null) {
            $this->session->setFlashdata('msg-failed', 'Subcourse tidak ditemukan');
            return redirect()->back();
        }

        // set type
        $type = $subcourse['type'];

        // delete subcourse based on type
        switch ($type) {
            case 'written':
                $modelWritten = new WrittenMaterialModel();
                $material = $modelWritten->where('subcourse_id', $id)->first();
                $modelWritten->delete($material['id']);
                $this->session->setFlashdata('msg', 'Berhasil menghapus materi teks');
                break;
            case 'video':
                $modelVideo = new VideoMaterialModel();
                $material = $modelVideo->where('subcourse_id', $id)->first();
                $modelVideo->delete($material['id']);
                $this->session->setFlashdata('msg', 'Berhasil menghapus materi video');
                break;
            case 'test':
                $modelTest = new TestMaterialModel();
                $material = $modelTest->where('subcourse_id', $id)->findAll();
                $modelOption = new OptionTestModel();
                foreach ($material as $m) {
                    $options = $modelOption->where('test_material_id', $m['id'])->findAll();
                    foreach ($options as $o) {
                        $modelOption->delete($o['id']);
                    }
                    $modelTest->delete($m['id']);
                }
                $this->session->setFlashdata('msg', 'Berhasil menghapus materi test');
                break;
            default:
                $this->session->setFlashdata('msg-failed', 'Gagal menghapus materi: tipe' . $type . 'tidak ditemukan');
                break;
        }

        // redirect to previous page
        return redirect()->back();
    }

    // not yet
    public function updateSubcourseTestSequence() // update urutan soal test material pada subcourse
    {

        // $data=[
        // {
        //     "id"= 1, //id test material
        //     "sequence"= 1
        // },
        // {
        //     "id"= 3, //id test material
        //     "sequence"= 2
        // },
        // {
        //     "id"= 2, //id test material
        //     "sequence"= 3
        // },
        // ];

        // get request data
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('testmaterials');

        // decode json data
        $contentArray = json_decode($jsonData, true);

        // set validation data
        $validationData = ['contentArray' => $contentArray];

        // set validation rules
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        // check validation
        if (!$this->validateData($validationData, $rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // update subcourse sequence
        $model = new TestMaterialModel();
        foreach ($contentArray as $course) {
            $data = [
                'sequence' => $course['sequence'],
            ];
            $model->update($course['id'], $data);
        }

        // redirect to previous page
        $this->session->setFlashdata('msg', 'Berhasil mengubah urutan soal test');
        return redirect()->back();
    }

    // Learning Path | check
    public function createLearningPath()
    {
        // set validation rules
        $rules = [
            'learning_path_name'            => 'required',
            'learning_path_description'     => 'required',
            'period'                        => 'required|numeric|max_length[3]',
            'learning_path_thumbnail'       => 'uploaded[learning_path_thumbnail]|max_size[learning_path_thumbnail,5120]|is_image[learning_path_thumbnail]|mime_in[learning_path_thumbnail,image/jpg,image/jpeg,image/png]',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // set learning path slug
        $slug = url_title($this->request->getVar('learning_path_name'), '-', true);

        // check learning path slug
        if ($this->learningpathModel->where('slug', $slug)->first() != null) {
            $this->session->setFlashdata('msg-failed', 'Judul learning path sudah ada');
            return redirect()->to('manage-course');
        }

        // get request file thumbnail and move to folder images-thumbnail
        $thumbnail = $this->request->getFile('learning_path_thumbnail');
        $thumbnail->move('images-thumbnail');

        // set data for add learning path
        $data = [
            'thumbnail'     => $thumbnail->getName(),
            'name'          => $this->request->getVar('learning_path_name'),
            'slug'          => $slug,
            'description'   => $this->request->getVar('learning_path_description'),
            'period'        => $this->request->getVar('period'),
            'status'        => 'draft',
            'published_at'  => null,
        ];

        // add learning path
        $this->learningpathModel->save($data);

        // redirect to detail learning path page by slug
        $this->session->setFlashdata('msg', 'Berhasil menambahkan learning path baru');
        return redirect()->to('detail-learning-path/' . $slug);
    }

    // not yet
    public function updateLearningPath($id)
    {
        // set validation rules
        $rules = [
            'nama_learning_path'          => 'required',
            'keterangan_learning_path'   => 'required',
            'period'        => 'required|numeric',
            'thumbnail_learning_path'     => 'max_size[thumbnail_learning_path,5120]|is_image[thumbnail_learning_path]|mime_in[thumbnail_learning_path,image/jpg,image/jpeg,image/png]',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $validation = $this->validator;
            dd($validation->getErrors());
            // return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        //
        $thumbnail = $this->request->getFile('thumbnail_learning_path');
        //caek gambar lama
        if ($thumbnail->getError() == 4) {
            $nameThumbnail = $this->request->getVar('old_learning_path_thumbnail');
        } else {
            $nameThumbnail = $thumbnail->getRandomName();
            $thumbnail->move('images-thumbnail', $nameThumbnail);
            if ($this->request->getVar('old_learning_path_thumbnail')) {
                if (file_exists('images-thumbnail/' . $this->request->getVar('old_learning_path_thumbnail'))) {
                    if ($this->request->getVar('old_learning_path_thumbnail') != 'base_thumbnail.jpg') {
                        unlink('images-thumbnail/' . $this->request->getVar('old_learning_path_thumbnail'));
                    }
                }
            }
        }

        // set data for update learning path
        $data = [
            'thumbnail'     => $nameThumbnail,
            'name'          => $this->request->getVar('nama_learning_path'),
            'description'   => $this->request->getVar('keterangan_learning_path'),
            'period'        => $this->request->getVar('period'),
            'updated_at'    => Time::now(),
        ];

        // check status publish
        if ($this->request->getVar('status') && $this->request->getVar('status') == 'publish') {
            $data['status'] = 'publish';
            $data['published_at'] = Time::now();
        } else {
            $data['published_at'] = null;
        }

        // update learning path
        $this->learningpathModel->update($id, $data);

        // redirect to manage course page
        $this->session->setFlashdata('msg', 'Berhasil merubah learning path');
        return redirect()->to('manage-course');
    }

    // check
    public function deleteLearningPath($id)
    {
        // get learning path by id
        $learningPath = $this->learningpathModel->find($id);

        // check exist learning path
        if ($learningPath == null) {
            $this->session->setFlashdata('msg-failed', 'Learning Path tidak ditemukan');
            return redirect()->back();
        }

        // unlink thumbnail
        if ($learningPath['thumbnail']) {
            if (file_exists('images-thumbnail/' . $learningPath['thumbnail'])) {
                if ($learningPath['thumbnail'] != 'base_thumbnail.jpg') {
                    unlink('images-thumbnail/' . $learningPath['thumbnail']);
                }
            }
        }

        // delete learning path by id
        $this->learningpathModel->delete($id);

        // redirect to manage course page
        $this->session->setFlashdata('msg', 'Berhasil menghapus Learning Path');
        return redirect()->to('manage-course');
    }

    // not yet
    public function publishLearningPath($id)
    {
        // get learning path by id
        $learningPath = $this->learningpathModel->find($id);

        // check exist learning path
        if ($learningPath == null) {
            $this->session->setFlashdata('msg-failed', 'Learning Path tidak ditemukan');
            return redirect()->back();
        }

        // check learning path publish status
        if ($learningPath['status'] == 'publish') {
            $this->session->setFlashdata('msg-failed', 'Learning Path sudah dipublish');
            return redirect()->back();
        }

        // set data for update learning path
        $data = [
            'status' => 'publish',
            'published_at' => Time::now(),
        ];

        // update learning path
        $this->learningpathModel->update($id, $data);

        // redirect to detail learning path page by slug
        $this->session->setFlashdata('msg', 'Berhasil mempublish Learning Path');
        return redirect()->to('detail-learning-path/' . $learningPath['slug']);
    }

    public function unpublishLearningPath($id)
    {
        // get learning path by id
        $learningPath = $this->learningpathModel->find($id);

        // check exist learning path
        if ($learningPath == null) {
            $this->session->setFlashdata('msg-failed', 'Learning Path tidak ditemukan');
            return redirect()->back();
        }

        // check learning path unpublish status
        if ($learningPath['status'] != 'publish') {
            $this->session->setFlashdata('msg-failed', 'Learning Path masih belum dipublish');
            return redirect()->back();
        }

        // set data for update learning path
        $data = [
            'status' => 'draft',
            'published_at' => null,
        ];

        // update learning path
        $this->learningpathModel->update($id, $data);

        // redirect to detail learning path page by slug
        $this->session->setFlashdata('msg', 'Berhasil mengunpublish Learning Path');
        return redirect()->to('detail-learning-path/' . $learningPath['slug']);
    }

    // Learning Path Courses | not yet
    public function addCourseToLearningPath($id) //id learning path
    {
        // get request json data
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('courses');

        // decode json data
        $contentArray = json_decode($jsonData, true);

        // set validation data
        $validationData = ['contentArray' => $contentArray];

        // set validation rules
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        // check validation
        if (!$this->validate($validationData, $rules)) {
            // ?
        }

        // save learning path course
        foreach ($contentArray as $course) {
            $data = [
                'learning_path_id' => $id,
                'course_id' => $course['id'],
                'sequence' => $course['sequence'],
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ];
            $this->learningPathCourseModel->save($data);
        }

        // return ?
    }

    // not yet
    public function updateCourseToLearningPath($id) //id learning path
    {
        // get request json data
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('courses');

        // decode json data
        $contentArray = json_decode($jsonData, true);

        // set validation data
        $validationData = ['contentArray' => $contentArray];

        // set validation rules
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        // check validation
        if ($this->validate($validationData, $rules)) {
            // ?
        }

        // get learning path courses by learning path id
        $learningPathCourses = $this->learningPathCourseModel->where('learning_path_id', $id)->findAll();

        // first, delete each learning path course
        foreach ($learningPathCourses as $learningPathCourse) {
            $this->learningPathCourseModel->delete($learningPathCourse['id']);
        }

        // second, save learning path course
        foreach ($contentArray as $course) {
            $data = [
                'learning_path_id' => $id,
                'course_id' => $course['id'],
                'sequence' => $course['sequence'],
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ];
            $this->learningPathCourseModel->save($data);
        }

        // return ?
    }

    // not yet
    public function updateSequenceLearningpathCourses() //id learning path
    {
        // get request json data
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('courses');

        // decode json data
        $contentArray = json_decode($jsonData, true);

        // set validation data
        $validationData = ['contentArray' => $contentArray];

        // set validation rules
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        if (!$this->validate($validationData, $rules)) {
            // ?
        }
        $learningPathCourseModel = new LearningPathCourseModel();
        foreach ($contentArray as $course) {
            $data = [
                'sequence' => $course['sequence'],
            ];
            $learningPathCourseModel->update($course['id'], $data);
        }

        // return ?
    }

    // Assign Learning Path | check
    public function assignLearningPath()
    {
        // get user learning path by user id from request data
        $user_learning_path = $this->userLearningPathModel->where('user_id', $this->request->getVar('user'))
            ->first();

        // check user learning path
        if ($user_learning_path != null && $user_learning_path['status'] != 'completed') {
            $this->session->setFlashdata('msg-failed', 'User sedang menjalankan learning path');
            return redirect()->to('manage-assignment-request');
        }

        // get user by id from request data
        $user = $this->usersModel->where('id', $this->request->getVar('user'))
            ->first();
        
        // check user role
        if ($user['role_id'] == 1 || $user['role_id'] == 2) {
            $this->session->setFlashdata('msg-failed', 'User tidak dapat diberikan learning path');
            return redirect()->to('manage-assignment-request');
        }

        // set validation rules
        $rules = [
            'user'                     => 'required',
            'learning_path'            => 'required',
            'message_assignment'       => 'required',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        
        // set data for add assign learning path
        $data = [
            'user_id'          => $this->request->getVar('user'),
            'learning_path_id' => $this->request->getVar('learning_path'),
            'admin_id'         => session('id'),
            'message_assignment' => $this->request->getVar('message_assignment'),
        ];

        // add assign learning path
        $assignLearningPathmodel = new AssignLearningPathModel();
        $assignLearningPathmodel->save($data);

        // get data learning path
        $learningPath = $this->learningpathModel->find($this->request->getVar('learning_path'));

        // set data for add user learning path
        $data = [
            'user_id' => $this->request->getVar('user'),
            'learning_path_id' => $this->request->getVar('learning_path'),
            'status' => 'not-started',
            'start_date' => Time::now(),
            'end_date' => Time::now()->addMonths($learningPath['period']),
        ];

        // add user learning path
        $this->userLearningPathModel->save($data);

        // redirect to manage assignment request page
        $this->session->setFlashdata('msg', 'Berhasil menambahkan learning path ke user');
        return redirect()->to('manage-assignment-request');
    }

    // User
    // Search User
    public function searchUser($fullname)
    {
        // get id role user
        $modelRole = new RoleModel();
        $role = $modelRole->where('name', 'user')->first();

        // get data user
        $data = $this->usersModel
        ->where('role_id', $role['id'])
        ->like('fullname', $fullname, 'both')->findAll();
        dd($data);
        return $data;
    }

    // Response Request Learning Path
    public function requestLearningPath($id)
    {
        // set validation rules
        $rules = [
            'status'           => 'required|in_list[approved,rejected]'
        ];

        // check validation
        if (!$this->validate($rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // set data for update request learning path
        $data = [
            'status'           => $this->request->getVar('status'),
            'admin_id'         => session('id'),
            'responded_at'     => Time::now(),
        ];

        // update request learning path
        $requestLearningPathModel = new RequestLearningPathModel();
        $requestLearningPathModel->update($id, $data);

        // add User Learning Path
        if ($this->request->getVar('status') == 'approved') {
            // get data request learning path by id
            $request = $requestLearningPathModel->find($id);

            // get data learning path by id from request data
            $learningPath = $this->learningpathModel->find($request['learning_path_id']);

            // set data for add user learning path
            $data = [
                'user_id' => $request['user_id'],
                'learning_path_id' => $request['learning_path_id'],
                'status' => 'not-started',
                'start_date' => Time::now(),
                'end_date' => Time::now()->addMonths($learningPath['period']),
            ];

            // add user learning path
            $this->userLearningPathModel->save($data);
        }
        $this->session->setFlashdata('msg', 'Berhasil merespon request learning path');
        return redirect()->back();
    }

    // Category
    public function createCategory()
    {
        // set validation rules
        $rules = [
            'name'          => 'required',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('manage-category', $data);
        }

        // set data for add category
        $data = [
            'name'          => $this->request->getVar('name'),
            'created_at'  => Time::now(),
            'updated_at'  => Time::now(),
        ];

        // add category
        $this->categoryModel->save($data);

        // redirect to manage category
        $this->session->setFlashdata('msg', 'Berhasil menambahkan category');
        return redirect()->to('manage-category');
    }

    public function updateCategory($id)
    {
        // set validation rules
        $rules = [
            'name'          => 'required',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('manage-category', $data);
        }

        // set data for update category
        $data = [
            'name'          => $this->request->getVar('name'),
            'updated_at'    => Time::now(),
        ];

        // update category
        $this->categoryModel->update($id, $data);

        // redirect to manage category
        $this->session->setFlashdata('msg', 'Berhasil mengupdate category');
        return redirect()->to('manage-category');
    }

    public function deleteCategory($id)
    {
        // delete category
        $this->categoryModel->delete($id);

        // redirect to manage category
        $this->session->setFlashdata('msg', 'Berhasil menghapus category');
        return redirect()->to('manage-category');
    }

    // News

    public function createNews()
    {
        // set validation rules
        $rules = [
            'title'          => 'required',
            'content'        => 'required',
            'category_id'    => 'required|numeric',
            'thumbnail_news'      => 'uploaded[thumbnail_news]|max_size[thumbnail_news,5120]|is_image[thumbnail_news]|mime_in[thumbnail_news,image/jpg,image/jpeg,image/png]',
        ];
        
        // check validation
        if (!$this->validate($rules)) {
            $validation = $this->validator;
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // set news slug
        $slug = url_title($this->request->getVar('title'), '-', true);
        
        // check news slug
        if ($this->newsModel->where('slug', $slug)->first() != null) {
            $this->session->setFlashdata('msg-failed', 'Judul news sudah ada');
            return redirect()->back();
        }

        // get request file thumbnail and move to folder images-thumbnail
        $thumbnail = $this->request->getFile('thumbnail_news');
        $thumbnail->move('images-thumbnail');

        // set data for add news
        $data = [
            'thumbnail'     => $thumbnail->getName(),
            'title'          => $this->request->getVar('title'),
            'slug'          => $slug,
            'content'        => $this->request->getVar('content'),
            'category_id'    => $this->request->getVar('category_id'),
            'admin_id'       => session('id'),
            'status'         => 'draft',
            'published_at'  => null,
        ];

        // add news
        $this->newsModel->save($data);

        // redirect to manage news
        $this->session->setFlashdata('msg', 'Berhasil menambahkan news baru');
        return redirect()->to('manage-news');
    }

    public function updateNews($id)
    {
        // set validation rules
        $rules = [
            'title'          => 'required',
            'content'        => 'required',
            'thumbnail'      => 'max_size[thumbnail,5120]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
            'status'         => 'required|in_list[publish,draft]',
        ];

        // check validation
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('manage-news', $data);
        }

        // get request file thumbnail 
        $thumbnail = $this->request->getFile('thumbnail');

        //cek gambar lama
        if ($thumbnail->getError() == 4) {
            $nameThumbnail = $this->request->getVar('oldThumbnail');
        } else {
            $nameThumbnail = $thumbnail->getRandomName();
            $thumbnail->move('thumbnailNews', $nameThumbnail);
            unlink('thumbnailNews/' . $this->request->getVar('oldThumbnail'));
        }

        // set data for update news
        $data = [
            'thumbnail'     => $nameThumbnail,
            'title'          => $this->request->getVar('title'),
            'content'        => $this->request->getVar('content'),
            'status'         => $this->request->getVar('status'),
            'updated_at'    => Time::now(),
        ];

        // check status publish
        if ($this->request->getVar('status') == 'publish') {
            $data['published_at'] = Time::now();
        } else {
            $data['published_at'] = null;
        }

        // update news
        $this->newsModel->update($id, $data);

        // redirect to manage news
        $this->session->setFlashdata('msg', 'Berhasil mengupdate news');
        return redirect()->to('manage-news');
    }

    public function deleteNews($id)
    {
        // get news by id
        $thumbnail = $this->newsModel->find($id);

        // unlink thumbnail news
        unlink('thumbnailNews/' . $thumbnail['thumbnail']);

        // delete news
        $this->newsModel->delete($id);

        // redirect to manage news
        $this->session->setFlashdata('msg', 'Berhasil menghapus news');
        return redirect()->to('manage-news');
    }

    public function publishNews($id)
    {
        // get news by id
        $dataNews = $this->newsModel->find($id);

        // check exist news
        if ($dataNews == null) {
            $this->session->setFlashdata('msg-failed', 'News tidak ditemukan');
            return redirect()->back();
        }

        // news publish status
        if ($dataNews['status'] == 'publish') {
            $this->session->setFlashdata('msg-failed', 'News sudah dipublish');
            return redirect()->back();
        }

        // set data for update news
        $data = [
            'status' => 'publish',
            'published_at' => Time::now(),
        ];

        // update news
        $this->newsModel->update($id, $data);

        // redirect to detail news page by slug
        $this->session->setFlashdata('msg', 'Berhasil mempublish News');
        return redirect()->to('detail-news/' . $dataNews['slug']);
    }

    public function unpublishNews($id)
    {
        // get news by id
        $dataNews = $this->newsModel->find($id);

        // check exist news
        if ($dataNews == null) {
            $this->session->setFlashdata('msg-failed', 'News tidak ditemukan');
            return redirect()->back();
        }

        // check news unpublish status
        if ($dataNews['status'] != 'publish') {
            $this->session->setFlashdata('msg-failed', 'News masih belum dipublish');
            return redirect()->back();
        }

        // set data for update news
        $data = [
            'status' => 'draft',
            'published_at' => null,
        ];

        // update news
        $this->newsModel->update($id, $data);

        // redirect to detail news page by slug
        $this->session->setFlashdata('msg', 'Berhasil mengunpublish News');
        return redirect()->to('detail-news/' . $dataNews['slug']);
    }

    // Upload Image for content wriiten materials
    public function uploadImage()
    {
        $file = $this->request->getFile('file');
        $name = $file->getRandomName();
        $file->move('images', $name);
        return $this->response->setJSON(['location' => base_url('images/' . $name)]);
    }
}
