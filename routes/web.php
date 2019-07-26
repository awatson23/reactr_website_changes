<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function(){
  //CONTENT MANAGEMENT SYSTEM ROUTES
  Route::get('/cms', function()
  {
    return redirect('/cmsProjects');
  });

  Route::get('/cmsProjects', 'CmsController@cmsProjects');
  Route::post('/searchProjects', 'CmsController@search');

  Route::get('/viewProject/{id}', 'CmsController@viewProject');

  Route::get('/createProject', 'CmsController@createProject');
  Route::post('/saveProject', 'CmsController@saveProject');
  Route::get('/editProject/{id}', 'CmsController@editProject');
  Route::post('/updateProject/{id}', 'CmsController@updateProject');
  Route::get('/deleteProject/{id}', 'CmsController@deleteProject');

  Route::get('/cmsTeam', 'CmsController@teamArchive');
  Route::post('/searchMembers', 'CmsController@searchTeam');

  Route::get('/createTeam', 'CmsController@newTeam');
  Route::post('/saveTeam', 'CmsController@saveTeam');
  Route::get('/editTeam/{id}', 'CmsController@editTeam');
  Route::post('/updateTeam/{id}', 'CmsController@updateTeam');
  Route::get('/deleteTeam/{id}', 'CmsController@deleteTeam');


  Route::get('/cmsTech', 'CmsController@techArchive');
  Route::post('/searchTech', 'CmsController@searchTech');

  Route::get('/createTech', 'CmsController@newTech');
  Route::post('/saveTech', 'CmsController@saveTech');
  Route::get('/editTech/{id}', 'CmsController@editTech');
  Route::post('/updateTech/{id}', 'CmsController@updateTech');
  Route::get('/deleteTech/{id}', 'CmsController@deleteTech');
  });

//main site
Route::get('/', 'ProjectsController@home');

Route::get('/archive', 'ProjectsController@getAllProjects');

Route::get('/details/{id}', 'ProjectsController@getProjectById');

Route::get('/team', 'TestimonialController@getAllTestimonials');

Route::get('/opportunities/{type}', 'JobController@getJobInfo');

Route::get('/partner', 'PartnerController@index');

Route::get('/careers', 'CareerController@index');
Route::get('/contact', 'ContactController@index');

//FORM MAIL STUFF
Route::post('/homeSubmit', 'FormController@homeMail');
Route::post('/teamSubmit', 'FormController@teamMail');
Route::post('/jobSubmit', 'FormController@jobMail');

Auth::routes();
