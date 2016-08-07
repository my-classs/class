<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//for admin panel
$route['admin-panel06/login'] = 'admin/dashboard';
$route['admin-panel06'] = 'admin/dashboard/home';
$route['admin-panel06/logout'] = 'admin/dashboard/logout';

//for search 
$route['subject-search/(:any)/(:any)/(:any)'] = 'search/search_subject/$1/$2/$3';
$route['search'] = 'search/index';


// for public
$route['courses/(:any)/(:any)'] = 'courses/course/$1/$2';  // for course lists
$route['courses/sub/(:any)/(:any)'] = 'courses/course_list/$1/$2';
$route['class/(:any)/(:any)'] = 'courses/course_detail/$1/$2'; //for class detail
$route['subjects/(:any)/(:any)'] = 'subjects/subject/$1/$2';  //for subject lists
$route['subject/detail/(:any)/(:any)'] = 'subjects/subject_detail/$1/$2';
$route['register.html'] = 'user'; // for user register
$route['login.html'] = 'user/login'; //for user login
$route['logout.html'] = 'user/logout';
$route['class-user/(:any)/(:any)'] = 'classuser/index/$1/$2';  //for normal user
$route['dashboard/(:any)/(:any)'] = 'user/dashboard/$1/$2'; //for class owner user
$route['dashboard/manage-subject'] = 'dashboard/manage_subject';
$route['dashboard/add-class-info.html'] = 'dashboard'; // 
$route['contact-us'] = 'home/contact_us';



$route['test'] = 'home/test';
