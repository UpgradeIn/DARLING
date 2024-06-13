<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LearningPathModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NewsModel;
use App\Models\SubcourseModel;
use App\Models\UserCourseModel;
use App\Models\CategoryModel;

class Index extends BaseController
{
    protected $news_model;
    protected $course_model;
    protected $sub_course_model;
    protected $learning_path_model;
    protected $category_model;
    public function __construct()
    {
        $this->news_model = new NewsModel();
        $this->course_model = new UserCourseModel();
        $this->learning_path_model = new LearningPathModel();
        $this->sub_course_model = new SubcourseModel();
        $this->category_model = new CategoryModel();
    }

    public function index()
    {
        
        //get top course
        $top_course = $this->course_model->orderBy('created_at', 'DESC')->findAll(3);

        //GET STATISTIC
        //get total learning path
        $total_learning_path = $this->learning_path_model->countAll();

        //get total course
        $total_course = $this->course_model->countAll();

        //get total video
        $total_video = $this->sub_course_model->where('type', 'video')->countAll();

        //get 4 newest news
        $data_news =  $this->news_model
        ->select('tb_news.title, tb_news.thumbnail, tb_categories.name as category_name')
        ->join('tb_categories', 'tb_categories.id = tb_news.category_id')
        ->orderBy('tb_news.published_at', 'DESC')
        ->findAll(4);

        $data = [
            'top_course' => $top_course,
            'total_learning_path' => $total_learning_path,
            'total_course' => $total_course,
            'total_video' => $total_video,
            'news' => $data_news,
        ];

        // dd($data);

        return view('index', $data);
    }
}
