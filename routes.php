<?php

/** --------------------------------------------------------------------------------------------------------
 * Add your routes here.
 * At this point, variables in a route are not supported like in Laravel: user/{user_id}/edit
 *  I add this in a future version.
 * 
 * Protect your routes with one ore more Middleware classes, like WhenNotLoggedIn or Permissions.
 *  See the classes for more information.
 * Add Middleware in an associative array with a key, like the admin route
 * ---------------------------------------------------------------------------------------------------------
*/

use App\Middleware\WhenNotLoggedin;
use App\Middleware\Permissions;


$router->get('admin', 'App/Controllers/AdminController.php@index', [
    'auth' => WhenNotLoggedin::class,
]);


$router->get('user/{id}', 'App/Controllers/UserController.php@show', [
    'show' => Permissions::class
]);

$router->get('user/{id}/edit', 'App/Controllers/UserController.php@edit', [
    'edit' => Permissions::class
]);


$router->get('user/create', 'App/Controllers/UserController.php@create');

$router->post('user/update', 'App/Controllers/UserController.php@update', [
     'update' => Permissions::class
]);

$router->post('user/store', 'App/Controllers/UserController.php@store', [
    'store' => Permissions::class
]);

$router->get('me', 'App/Controllers/ProfileController.php@callAll');

$router->get('', 'App/Controllers/HomeController.php@index');
$router->get('home', 'App/Controllers/HomeController.php');

$router->get('login', 'App/Controllers/LoginController.php@index');
$router->get('logout', 'App/Controllers/LoginController.php@logout');
$router->post('login/auth', 'App/Controllers/LoginController.php@login');

$router->get('contact', 'App/Controllers/ContactController.php@index');

$router->get('register', 'App/Controllers/RegisterController.php@index');
$router->post('register', 'App/Controllers/RegisterController.php@store');



$router->get('education/{id}/edit', 'App/Controllers/EducationController.php@edit');
$router->get('education/create', 'App/Controllers/EducationController.php@create');
$router->post('education/store', 'App/Controllers/EducationController.php@store');
$router->get('education/{id}', 'App/Controllers/EducationController.php@show', );
$router->get('education', 'App/Controllers/EducationController.php@index');
$router->post('education/{id}/update', 'App/Controllers/EducationController.php@update');

$router->get('job/{id}/edit', 'App/Controllers/JobsController.php@edit');
$router->post('job/{id}/update', 'App/Controllers/JobsController.php@update');
$router->get('job/create', 'App/Controllers/JobsController.php@create');
$router->post('job/store', 'App/Controllers/JobsController.php@store');
$router->get('job', 'App/Controllers/JobsController.php@index');

$router->post('hobbie/{id}/update', 'App/Controllers/HobbiesController.php@update');
$router->get('hobbie/{id}/edit', 'App/Controllers/HobbiesController.php@edit');
$router->get('hobbie/create', 'App/Controllers/HobbiesController.php@create');  
$router->post('hobbie/store', 'App/Controllers/HobbiesController.php@store');
$router->post('hobbie/{id}/update', 'App/Controllers/HobbiesController.php@update');
$router->get('hobbie', 'App/Controllers/HobbiesController.php@index');

$router->get('skill/{id}/edit', 'App/Controllers/SkillsController.php@edit');
$router->post('skill/{id}/update', 'App/Controllers/SkillsController.php@update');
$router->post('skill/store', 'App/Controllers/SkillsController.php@store');
$router->get('skill/create', 'App/Controllers/SkillsController.php@create');
$router->get('skill', 'App/Controllers/SkillsController.php@index');











