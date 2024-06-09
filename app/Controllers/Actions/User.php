<?php

namespace App\Controllers\Actions;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
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

    // request learning path
    public function requestLearningPath($slug)
    {
    }
}
