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
use App\Models\RequestLearningPathModel;
use App\Models\AssignLearningPathModel;
use App\Models\UsersModel;

use CodeIgniter\I18n\Time;

class Operator extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
    }

    // Courses
    public function createCourse()
    {
        $rules = [
            'name'          => 'required',
            'description'   => 'required',
            'module'        => 'required',
            'thumbnail'     => 'uploaded[thumbnail]|max_size[thumbnail,5120]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
            'status'        => 'required|in_list[publish,draft]',
        ];

        if ($this->validate($rules)) {
            $model = new CourseModel();
            $thumbnail = $this->request->getFile('thumbnail');

            $thumbnail->move('images');

            $nameThumbnail = $thumbnail->getName();

            $data = [
                'thumbnail'     => $nameThumbnail,
                'name'          => $this->request->getVar('name'),
                'description'   => $this->request->getVar('description'),
                'module'        => $this->request->getVar('module'),
                'status'        => $this->request->getVar('status'),
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ];

            if ($this->request->getVar('status') == 'publish') {
                $data['published_at'] = Time::now();
            } else {
                $data['published_at'] = null;
            }

            $model->save($data);
            return redirect()->to('manage-course');
        } else {
            $data['validation'] = $this->validator;
            return view('manage_course', $data);
        }
    }

    public function updateCourse($id)
    {
        $rules = [
            'name'          => 'required',
            'description'   => 'required',
            'module'        => 'required',
            'thumbnail'     => 'max_size[thumbnail,5120]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
            'status'        => 'required|in_list[publish,draft]',
        ];

        if ($this->validate($rules)) {
            $model = new CourseModel();

            $thumbnail = $this->request->getFile('thumbnail');
            //caek gambar lama
            if ($thumbnail->getError() == 4) {
                $nameThumbnail = $this->request->getVar('oldThumbnail');
            } else {
                $thumbnail->move('images');
                $nameThumbnail = $thumbnail->getName();
                unlink('images/' . $this->request->getVar('oldThumbnail'));
            }

            $data = [
                'thumbnail'     => $nameThumbnail,
                'name'          => $this->request->getVar('name'),
                'description'   => $this->request->getVar('description'),
                'module'        => $this->request->getVar('module'),
                'updated_at'    => Time::now(),
                'status'        => $this->request->getVar('status'),
            ];

            if ($this->request->getVar('status') == 'publish') {
                $data['published_at'] = Time::now();
            } else {
                $data['published_at'] = null;
            }

            $model->update($id, $data);
            return redirect()->to('manage-course');
        } else {
            $data['validation'] = $this->validator;
            return view('manage_course', $data);
        }
    }

    public function deleteCourse($id)
    {
        $model = new CourseModel();

        $thumbnail = $model->find($id);
        unlink('images/' . $thumbnail['thumbnail']);

        $model->delete($id);
        return redirect()->to('manage-course');
    }

    public function updateCourseSequence() // update urutan subcourse pada course
    {

        // $data=[
        // {
        //     "id"= 1, //id subcourse
        //     "sequence"= 1
        // },
        // {
        //     "id"= 3, //id subcourse
        //     "sequence"= 2
        // },
        // {
        //     "id"= 2, //id subcourse
        //     "sequence"= 3
        // },
        // ];

        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('subcourses');
        $contentArray = json_decode($jsonData, true);
        $validationData = ['contentArray' => $contentArray];
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        if ($this->validate($validationData, $rules)) {
            $model = new SubcourseModel();
            foreach ($contentArray as $course) {
                $data = [
                    'sequence' => $course['sequence'],
                ];
                $model->update($course['id'], $data);
            }
        }
    }

    // Sub Courses
    public function createSubCourse()
    {
        $validationRules = [
            'title'     => 'required',
            'course_id' => 'required' | 'numeric',
            'sequence'  => 'required' | 'numeric',
            'type' => 'required|in_list[video,test,written]',
            'status'    => 'required|in_list[publish,draft]',
            'content'   => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The {field} field is required.'
                ],
            ],
        ];
        $validationData = $this->request->getPost();
        // Additional rules based on 'type'
        $type = $this->request->getVar('type');
        if ($type === 'video') {
            $validationRules['content'] = 'required|string';
        } elseif ($type === 'written') {
            $validationRules['content'] = 'required|string';
        } elseif ($type === 'test') {
            /** @var string|null $jsonData */
            $jsonData = $this->request->getPost('content');
            $contentArray = json_decode($jsonData, true);

            // $validationRules['content'] = 'required|array';
            $validationRules['content.sequence'] = 'required|integer';
            $validationRules['content.content'] = 'required|string';
            $validationRules['content.type_test'] = 'required|string';
            $validationRules['content.options'] = 'required|array';
            $validationRules['content.options.*.content'] = 'required|string';
            $validationRules['content.options.*.correct'] = 'required|boolean';
            // $validationData = ['content' => $contentArray];
            $validationData['content'] = $contentArray;
        }

        if ($this->validate($validationData, $validationRules)) {
            $model = new SubcourseModel();

            $data = [
                'course_id' => $this->request->getVar('course_id'),
                'title'     => $this->request->getVar('title'),
                'sequence'  => $this->request->getVar('sequence'),
                'type'      => $this->request->getVar('type'),
                'status'    => $this->request->getVar('status'),
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ];
            if ($model->save($data)) {
                $insertedID = $model->insertID();
                if ($type === 'written') {
                    $testModel = new WrittenMaterialModel();
                    $dataMaterial = [
                        'subcourse_id' => $insertedID,
                        'content' => $this->request->getVar('content'),
                        'created_at'  => Time::now(),
                        'updated_at'  => Time::now(),
                    ];
                    $testModel->save($dataMaterial);
                } else if ($type === 'video') {
                    $testModel = new VideoMaterialModel();
                    $dataMaterial = [
                        'subcourse_id' => $insertedID,
                        'content' => $this->request->getVar('content'),
                        'created_at'  => Time::now(),
                        'updated_at'  => Time::now(),
                    ];
                    $testModel->save($dataMaterial);
                } else if ($type === 'test') {
                    $testModel = new TestMaterialModel();
                    $optionModel = new OptionTestModel();

                    $dataMaterial = [
                        'subcourse_id' => $insertedID,
                        'content' => $validationData['content']['content'],
                        'sequence' => $validationData['content']['sequence'],
                        'type_test' => $validationData['content']['type_test'],
                        'created_at'  => Time::now(),
                        'updated_at'  => Time::now(),
                    ];

                    $testModel->save($dataMaterial);
                    $insertedMaterialID = $testModel->insertID();
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
                }
                return redirect()->to('manage-subcourse');
            } else {
                return redirect()->to('manage-subcourse');
            }
        } else {
            $data['validation'] = $this->validator;
            return view('manage_subcourse', $data);
        }
    }

    public function updateSubCourse($id)
    {
        $validationRules = [
            'title'     => 'required',
            'course_id' => 'required' | 'numeric',
            'sequence'  => 'required' | 'numeric',
            'type' => 'required|in_list[video,test,written]',
            'status'    => 'required|in_list[publish,draft]',
            'content'   => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'The {field} field is required.'
                ],
            ],
        ];
        $validationData = $this->request->getPost();
        // Additional rules based on 'type'
        $type = $this->request->getVar('type');
        if ($type === 'video') {
            $validationRules['content'] = 'required|string';
        } elseif ($type === 'written') {
            $validationRules['content'] = 'required|string';
        } elseif ($type === 'test') {
            /** @var string|null $jsonData */
            $jsonData = $this->request->getPost('content');
            $contentArray = json_decode($jsonData, true);

            // $validationRules['content'] = 'required|array';
            $validationRules['content.sequence'] = 'required|integer';
            $validationRules['content.content'] = 'required|string';
            $validationRules['content.type_test'] = 'required|string';
            $validationRules['content.options'] = 'required|array';
            $validationRules['content.options.*.content'] = 'required|string';
            $validationRules['content.options.*.correct'] = 'required|boolean';
            // $validationData = ['content' => $contentArray];
            $validationData['content'] = $contentArray;
        }

        if ($this->validate($validationData, $validationRules)) {
            $model = new SubcourseModel();

            $data = [
                'course_id' => $this->request->getVar('course_id'),
                'title'     => $this->request->getVar('title'),
                'sequence'  => $this->request->getVar('sequence'),
                'type'      => $this->request->getVar('type'),
                'status'    => $this->request->getVar('status'),
                'updated_at'  => Time::now(),
            ];
            if ($model->update($id, $data)) {
                if ($type === 'written') {
                    $writtenModel = new WrittenMaterialModel();
                    $dataMaterial = [
                        'subcourse_id' => $id,
                        'content' => $this->request->getVar('content'),
                        'updated_at'  => Time::now(),
                    ];
                    $writtenModel->where('subcourse_id', $id)->set($dataMaterial)->update();
                } else if ($type === 'video') {
                    $videoModel = new VideoMaterialModel();
                    $dataMaterial = [
                        'subcourse_id' => $id,
                        'content' => $this->request->getVar('content'),
                        'updated_at'  => Time::now(),
                    ];
                    $videoModel->where('subcourse_id', $id)->set($dataMaterial)->update();
                } else if ($type === 'test') {
                    $testModel = new TestMaterialModel();
                    $optionModel = new OptionTestModel();

                    $material = $testModel->where('subcourse_id', $id)->first();
                    $options = $optionModel->where('test_material_id', $material['id'])->findAll();
                    foreach ($options as $o) {
                        $optionModel->delete($o['id']);
                    }
                    $testModel->delete($material['id']);

                    $dataMaterial = [
                        'subcourse_id' => $id,
                        'content' => $validationData['content']['content'],
                        'sequence' => $validationData['content']['sequence'],
                        'type_test' => $validationData['content']['type_test'],
                        'created_at'  => Time::now(),
                        'updated_at'  => Time::now(),
                    ];

                    $testModel->update($dataMaterial);
                    $insertedMaterialID = $testModel->insertID();
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
                }
                return redirect()->to('manage-subcourse');
            } else {

                return redirect()->to('manage-subcourse');
            }
        } else {
            $data['validation'] = $this->validator;
            return view('manage_subcourse', $data);
        }
    }

    public function deleteSubCourse($id)
    {
        $model = new SubcourseModel();
        $modelWritten = new WrittenMaterialModel();
        $modelVideo = new VideoMaterialModel();
        $modelTest = new TestMaterialModel();
        $modelOption = new OptionTestModel();

        $subcourse = $model->find($id);
        $type = $subcourse['type'];

        if ($type === 'written') {
            $material = $modelWritten->where('subcourse_id', $id)->first();
            $modelWritten->delete($material['id']);
        } else if ($type === 'video') {
            $material = $modelVideo->where('subcourse_id', $id)->first();
            $modelVideo->delete($material['id']);
        } else if ($type === 'test') {
            $material = $modelTest->where('subcourse_id', $id)->findAll();
            foreach ($material as $m) {
                $options = $modelOption->where('test_material_id', $m['id'])->findAll();
                foreach ($options as $o) {
                    $modelOption->delete($o['id']);
                }
                $modelTest->delete($m['id']);
            }
        }
    }

    public function updateCourseTest() // update urutan soal test material pada subcourse
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

        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('testmaterials');
        $contentArray = json_decode($jsonData, true);
        $validationData = ['contentArray' => $contentArray];
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        if ($this->validate($validationData, $rules)) {
            $model = new TestMaterialModel();
            foreach ($contentArray as $course) {
                $data = [
                    'sequence' => $course['sequence'],
                ];
                $model->update($course['id'], $data);
            }
        }
    }
    // Learning Path
    public function createLearningPath()
    {
        $rules = [
            'name'          => 'required',
            'description'   => 'required',
            'period'        => 'required|numeric',
            'thumbnail'     => 'uploaded[thumbnail]|max_size[thumbnail,5120]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
            'status'        => 'required|in_list[publish,draft]',
        ];

        if ($this->validate($rules)) {
            $model = new LearningPathModel();
            $thumbnail = $this->request->getFile('thumbnail');

            //generate random name
            $nameThumbnail = $thumbnail->getRandomName();

            $thumbnail->move('images', $nameThumbnail);

            $data = [
                'thumbnail'     => $nameThumbnail,
                'name'          => $this->request->getVar('name'),
                'description'   => $this->request->getVar('description'),
                'period'        => $this->request->getVar('period'),
                'status'        => $this->request->getVar('status'),
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ];
            if ($this->request->getVar('status') == 'publish') {
                $data['published_at'] = Time::now();
            } else {
                $data['published_at'] = null;
            }
            $model->save($data);
            return redirect()->to('manage-learningpath');
        } else {
            $data['validation'] = $this->validator;
            return view('manage-learningpath', $data);
        }
    }

    public function updateLearningPath($id)
    {


        $rules = [
            'name'          => 'required',
            'description'   => 'required',
            'period'        => 'required|numeric',
            'thumbnail'     => 'max_size[thumbnail,5120]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
            'status'        => 'required|in_list[publish,draft]',
        ];

        if ($this->validate($rules)) {
            $model = new LearningPathModel();

            $thumbnail = $this->request->getFile('thumbnail');
            //caek gambar lama
            if ($thumbnail->getError() == 4) {
                $nameThumbnail = $this->request->getVar('oldThumbnail');
            } else {
                $nameThumbnail = $thumbnail->getRandomName();
                $thumbnail->move('images', $nameThumbnail);
                unlink('images/' . $this->request->getVar('oldThumbnail'));
            }

            $data = [
                'thumbnail'     => $nameThumbnail,
                'name'          => $this->request->getVar('name'),
                'description'   => $this->request->getVar('description'),
                'period'        => $this->request->getVar('period'),
                'status'        => $this->request->getVar('status'),
                'updated_at'    => Time::now(),
            ];
            if ($this->request->getVar('status') == 'publish') {
                $data['published_at'] = Time::now();
            } else {
                $data['published_at'] = null;
            }
            $model->update($id, $data);
            return redirect()->to('manage-learningpath');
        } else {
            $data['validation'] = $this->validator;
            return view('manage-learningpath', $data);
        }
    }

    public function deleteLearningPath($id)
    {
        $model = new LearningPathModel();

        $thumbnail = $model->find($id);
        unlink('images/' . $thumbnail['thumbnail']);

        $model->delete($id);
        return redirect()->to('manage-learningpath');
    }

    // Learning Path Courses
    public function addCourseToLearningPath($id) //id learning path
    {
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('courses');
        $contentArray = json_decode($jsonData, true);
        $validationData = ['contentArray' => $contentArray];
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        if ($this->validate($validationData, $rules)) {
            $learningPathCourseModel = new LearningPathCourseModel();
            foreach ($contentArray as $course) {
                $data = [
                    'learning_path_id' => $id,
                    'course_id' => $course['id'],
                    'sequence' => $course['sequence'],
                    'created_at'  => Time::now(),
                    'updated_at'  => Time::now(),
                ];
                $learningPathCourseModel->save($data);
            }
        }
    }

    public function updateSequenceLearningpathCourses($id) //id learning path
    {
        /** @var string|null $jsonData */
        $jsonData = $this->request->getPost('courses');
        $contentArray = json_decode($jsonData, true);
        $validationData = ['contentArray' => $contentArray];
        $rules = [
            'contentArray.*.id' => 'required|numeric',
            'contentArray.*.sequence' => 'required|numeric',
        ];

        if ($this->validate($validationData, $rules)) {
            $learningPathCourseModel = new LearningPathCourseModel();
            foreach ($contentArray as $course) {
                $data = [
                    'sequence' => $course['sequence'],
                ];
                $learningPathCourseModel->update($course['id'], $data);
            }
        }
    }

    // Assign Learning Path
    public function assignLearningPath()
    {
        $rules = [
            'user_id'          => 'required',
            'learning_path_id' => 'required',
            'status'           => 'required|in_list[pending,approved,rejected]',
            'message'          => 'required',
        ];

        if ($this->validate($rules)) {
            $model = new AssignLearningPathModel();
            $userModel = new UsersModel();
            $email = session('email');
            $user = $userModel->where('email', $email)
                ->first();

            $data = [
                'user_id'          => $this->request->getVar('user_id'),
                'learning_path_id' => $this->request->getVar('learning_path_id'),
                'admin_id'         => $user['id'],
                'created_at'  => Time::now(),
                'updated_at'  => Time::now(),
            ];
            $model->save($data);
            return redirect()->to('manage-assign-learningpath');
        } else {
            $data['validation'] = $this->validator;
            return view('manage-assign-learningpath', $data);
        }
    }

    // Response Request Learning Path
    public function requestLearningPath($id)
    {
        $rules = [
            'status'           => 'required|in_list[approved,rejected]'
        ];

        if ($this->validate($rules)) {
            $model = new RequestLearningPathModel();
            $userModel = new UsersModel();
            $email = session('email');
            $user = $userModel->where('email', $email)
                ->first();

            $data = [
                'status'           => $this->request->getVar('status'),
                'admin_id'         => $user['id'],
                'responded_at'  => Time::now(),
            ];
            $model->update($id, $data);
            return redirect()->to('manage-request-learningpath');
        } else {
            $data['validation'] = $this->validator;
            return view('manage-request-learningpath', $data);
        }
    }


    // Category
    

    // News

}
