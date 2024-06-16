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
    protected $session;
    protected $news_model;
    protected $course_model;
    protected $sub_course_model;
    protected $learning_path_model;
    protected $category_model;

    public function __construct()
    {
        $this->session = session();
        $this->news_model = new NewsModel();
        $this->course_model = new UserCourseModel();
        $this->learning_path_model = new LearningPathModel();
        $this->sub_course_model = new SubcourseModel();
        $this->category_model = new CategoryModel();
    }

    public function index()
    {
        $role = $this->session->get('role');
        if ($role == 'user') {
            return view('index');
        }
        if ($role == 'operator') {
            $data = [
                'test' => 'testttt'
            ];
            return view('index', $data);
        }
        if ($role == 'officials') {
            return view('index');
        }
        //get top course
        $top_course = $this->course_model->orderBy('created_at', 'DESC')->findAll(3);

        //GET STATISTIC
        //get total learning path
        $total_learning_path = $this->learning_path_model
        ->where('status', 'publish')
        ->countAll();

        //get total course
        $total_course = $this->course_model
        ->where('status', 'publish')
        ->countAll();

        //get total video
        $total_video = $this->sub_course_model
        ->join('tb_courses', 'tb_courses.id = tb_subcourses.course_id')
        ->where('tb_courses.status', 'publish')
        ->where('tb_subcourses.type', 'video')
        ->countAllResults();

        //get 4 newest news
        $data_news =  $this->news_model
        ->select('tb_news.title, tb_news.thumbnail, tb_news.slug, tb_news.published_at, tb_categories.name as category_name')
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

    public function news()
    {
        $data = [
            'news' => $this->news_model
            ->select('tb_news.title, tb_news.thumbnail, tb_news.slug, tb_news.published_at, tb_categories.name as category_name')
            ->join('tb_categories', 'tb_categories.id = tb_news.category_id')
            ->where('status', 'publish')
            ->orderBy('published_at', 'DESC')
            ->findAll()
        ];

        // dd($data);

        return view('allNews', $data);
    }

    public function detailNews($slug)
    {
        $news = $this->news_model
        ->select('tb_news.title, tb_news.thumbnail, tb_news.slug, tb_news.content, tb_news.published_at, tb_categories.name as category_name')
        ->join('tb_categories', 'tb_categories.id = tb_news.category_id')
        ->where('slug', $slug)->first();

        $data = [
            'news' => $news
        ];
        return view('detailNews', $data);
    }
}
