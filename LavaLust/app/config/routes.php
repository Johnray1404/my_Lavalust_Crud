<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
*/

// Home route
$router->get('/', 'Welcome');

// Student routes
$router->get('/student/display', 'Student::read'); // Default display for students (page 1)
$router->get('/student/display/{page}', 'Student::read'); // Display students with pagination
$router->match('/student/add', 'Student::create', array('GET', 'POST')); // Add student
$router->match('/student/update/{id}', 'Student::update', array('GET', 'POST')); // Update student
$router->get('/student/delete/{id}', 'Student::delete'); // Delete student
$router->get('/student/search', 'Student::search'); // Search students
$router->get('/student/search/{page}', 'Student::search'); // Search students with pagination
?>
