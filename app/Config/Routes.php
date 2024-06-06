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
$routes->group('officials', ['filter' => 'actions:officials'], static function($routes) {
    $routes->post('abc', 'Actions\Officials::abc');
});

// Actions/Operator
$routes->group('operator', ['filter' => 'actions:operator'], static function($routes) {
    $routes->post('create-learningpaths', 'Actions\Operator::createLearningPath');
    $routes->post('update-learningpaths/(:num)', 'Actions\Operator::updateLearningPath/$1');
    $routes->get('delete-learningpaths/(:num)', 'Actions\Operator::deleteLearningPath/$1');
    $routes->post('create-courses', 'Actions\Operator::createCourse');
    $routes->post('update-courses/(:num)', 'Actions\Operator::updateCourse/$1');
    $routes->get('delete-courses/(:num)', 'Actions\Operator::deleteCourse/$1');
});

// Actions/User
$routes->group('user', ['filter' => 'actions:user'], static function($routes) {
    $routes->post('abc', 'Actions\User::abc');
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
    $routes->get('manage-course', 'Pages\Operator::manage_course');
});

// Pages/Profile
$routes->group('profile', ['filter' => "pages:$role"],static function($routes) {
    $routes->get('/', 'Pages\Profile::profile');
    $routes->get('my-profile', 'Pages\Profile::my_profile');
    $routes->get('my-activity', 'Pages\Profile::my_activity');
});

// Pages/User
$routes->group('', ['filter' => 'pages:user'], static function($routes) {
    $routes->get('user', 'Pages\User::home');
    $routes->get('course', 'Pages\User::course');
});

$routes->get('/', 'Index::index');