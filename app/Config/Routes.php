<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$role = session('role');

/* -------------------------------------------------------------------------------------------
            Urutkan routes sesuai folder, file, dan function dalam Controllers
------------------------------------------------------------------------------------------- */

// Actions

// Actions/Auth
$routes->group('auth', static function($routes) {
    $routes->post('register', 'Actions\Auth::register');
    $routes->post('login', 'Actions\Auth::login');
    $routes->post('logout', 'Actions\Auth::logout');
});

// Actions/Officials
$routes->group('', ['filter' => 'actions:officials'], static function($routes) {
    $routes->post('abc', 'Actions\Officials::abc');
});

// Actions/Operator
$routes->group('', ['filter' => 'actions:operator'], static function($routes) {
    // learning paths
    $routes->post('create-learningpaths', 'Actions\Operator::createLearningPath');
    $routes->post('update-learningpaths/(:num)', 'Actions\Operator::updateLearningPath/$1');
    $routes->delete('delete-learningpaths/(:num)', 'Actions\Operator::deleteLearningPath/$1');
    $routes->post('publish-learningpaths', 'Actions\Operator::publisLearningPath');
    // courses
    $routes->post('create-courses', 'Actions\Operator::createCourse');
    $routes->post('update-courses/(:num)', 'Actions\Operator::updateCourse/$1');
    $routes->delete('delete-courses/(:num)', 'Actions\Operator::deleteCourse/$1');
    $routes->post('update-subcourses-sequence', 'Actions\Operator::updateSubcourseSequence');
    $routes->post('publish-courses', 'Actions\Operator::publisCourse');
    // sub courses
    $routes->post('create-subcourses', 'Actions\Operator::createSubCourse');
    $routes->post('update-subcourses/(:num)', 'Actions\Operator::updateSubCourse/$1');
    $routes->delete('delete-subcourses/(:num)', 'Actions\Operator::deleteSubCourse/$1');
    $routes->post('update-subcourses-test-sequence', 'Actions\Operator::updateSubcourseTestSequence');
    // Learning Path Courses
    $routes->post('create-learningpath-courses', 'Actions\Operator::addCourseToLearningPath');
    $routes->post('update-learningpath-courses/(:num)', 'Actions\Operator::updateCourseToLearningPath/$1');
    $routes->post('update-learningpath-courses-sequence', 'Actions\Operator::updateSequenceLearningpathCourses');
    // Assign Learning Path
    $routes->post('assign-learningpath', 'Actions\Operator::assignLearningPath');
    // Response Request Learning Path
    $routes->post('response-request-learningpath/(:num)', 'Actions\Operator::requestLearningPath/$1');
    // Category News
    $routes->post('create-category-news', 'Actions\Operator::createCategoryNews');
    $routes->post('update-category-news/(:num)', 'Actions\Operator::updateCategoryNews/$1');
    $routes->delete('delete-category-news/(:num)', 'Actions\Operator::deleteCategoryNews/$1');
    // News
    $routes->post('create-news', 'Actions\Operator::createNews');
    $routes->post('update-news/(:num)', 'Actions\Operator::updateNews/$1');
    $routes->delete('delete-news/(:num)', 'Actions\Operator::deleteNews/$1');
    $routes->post('publish-news/(:num)', 'Actions\Operator::publishNews/$1');
    // Upload Image For Written Material
    $routes->post('upload-image', 'Actions\Operator::uploadImage');
});

// Actions/User
$routes->group('', ['filter' => 'actions:user'], static function($routes) {
    $routes->post('request-learning-path/(:any)', 'Actions\User::requestLearningPath/$1');
    $routes->post('status-subcourse/(:num)', 'Actions\User::statusSubCourse/$1');
});

/* ---------------------------------------------------------------------------------------- */

// Pages

// Pages/Auth
$routes->group('auth', ['filter' => 'is_login'], static function($routes) {;
    $routes->get('register', 'Pages\Auth::register');
    $routes->get('login', 'Pages\Auth::login');
});

// Pages/Officials
$routes->group('', ['filter' => 'pages:officials'], static function($routes) {
    $routes->get('officials', 'Pages\Officials::dashboard');
});

// Pages/Operator
$routes->group('', ['filter' => 'pages:operator'], static function($routes) {
    $routes->get('operator', 'Pages\Operator::dashboard');
    $routes->get('manage-assignment-request', 'Pages\Operator::manageAssigmentRequest');
    $routes->get('detail-assignment/(:num)', 'Pages\Operator::detailAssignment/$1');
    $routes->get('detail-request/(:num)', 'Pages\Operator::detailRequest/$1');
    $routes->get('detail-learning-path/(:any)', 'Pages\Operator::detailLearningPath/$1');
    $routes->get('manage-course', 'Pages\Operator::manageCourse');
    $routes->get('detail-course/(:any)', 'Pages\Operator::detailCourse/$1');
    $routes->get('add-pre-test', 'Pages\Operator::addPreTest');
    $routes->get('edit-pre-test/(:num)', 'Pages\Operator::editPreTest/$1');
    $routes->get('add-post-test', 'Pages\Operator::addPostTest');
    $routes->get('edit-post-test/(:num)', 'Pages\Operator::editPostTest/$1');
    $routes->get('manage-news', 'Pages\Operator::manageNews');
    $routes->get('detail-news/(:any)', 'Pages\Operator::detailNews/$1');
});

// Pages/Profile
$routes->group('profile', ['filter' => "pages:$role"],static function($routes) {
    $routes->get('/', 'Pages\Profile::profile');
    $routes->get('my-profile', 'Pages\Profile::myProfile');
    $routes->get('my-activity', 'Pages\Profile::myActivity');
});

// Pages/User
$routes->group('', ['filter' => 'pages:user'], static function($routes) {
    $routes->get('user', 'Pages\User::home');
    $routes->get('course', 'Pages\User::course');
    $routes->get('course/(:segment)', 'Pages\User::detailCourse/$1');
    $routes->get('course/(:segment)/sub/(:num)', 'Pages\User::subCourse/$1/$2');
    $routes->get('learning-path', 'Pages\User::learningPath');
    $routes->get('learning-path/(:any)', 'Pages\User::detailLearningPath/$1');
    $routes->get('my-learning-path', 'Pages\User::learningPathByUserId');
});

// Public
$routes->get('/', 'Index::index');
$routes->get('news', 'Index::news');
$routes->get('news/(:segment)', 'Index::detailNews/$1');
