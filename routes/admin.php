<?php
/*
|--------------------------------------------------------------------------
| Auth  Routes
|--------------------------------------------------------------------------
*/
Route::get('/user/edit','auth\AuthController@edit');
Route::post('/user/edit','auth\AuthController@update');
/*
|--------------------------------------------------------------------------
| Theme Cookie Routes
|--------------------------------------------------------------------------
*/
Route::post('/theme_layout','cookie\ThemeCookieController@themeLayout');
Route::post('/theme_nav_bar_color','cookie\ThemeCookieController@navBarColor');
Route::post('/theme_footer_type','cookie\ThemeCookieController@footerType');
Route::post('/theme_nav_bar_type','cookie\ThemeCookieController@navBarType');
Route::post('/theme_sidebar_switch','cookie\ThemeCookieController@sidebarSwitch');
Route::post('/theme_scroll_top','cookie\ThemeCookieController@scrollTop');
Route::post('/theme_color','cookie\ThemeCookieController@themeColor');
/*
|--------------------------------------------------------------------------
| Resources Routes
|--------------------------------------------------------------------------
*/
Route::resource('settings','settings\SettingsController');
Route::resource('clients','clients\ClientsController');
Route::resource('admins','admins\AdminsController');
Route::resource('instructor','instructors\InstructorsController');

Route::get('about', 'about\about\AboutController@index');
Route::PATCH('about', 'about\about\AboutController@update');
Route::resource('instructor-words', 'about\instructorWords\InstructorWordsController');
Route::resource('achievement-the-site', 'about\achievementsTheSite\AchievementsController');
Route::resource('blog', 'blog\blog\BlogController');
Route::resource('blog/blog-id.comment', 'blog\comments\CommentsController');

Route::resource('admin-groups','admins\AdminGroupsController');
Route::resource('categories','categories\MainCategoriesController');
Route::resource('courses','courses\courses\CoursesController');
Route::resource('courses/course-id.course-class-id','courses\courseClasses\CourseClassesController');
Route::resource('courses/course-id.course-class-id.exam','courses\courseClasses\CourseClassExamController');
Route::resource('courses/course-id.course-class-id.media','courses\courseClasses\CourseClassMediaController');
Route::resource('courses/course-id.course-class-id.lecture','courses\courseClasses\CourseClassesLecturesController');
Route::resource('courses/course-id.course-class-id.question','courses\courseClasses\CourseClassesQuestionsController',['only'=>['index','destroy']]);
Route::resource('courses/course-id.course-class-id.instructor-contact','courses\courseClasses\CourseClassInstructorContactsController',['only'=>['index','destroy','edit','update']]);
Route::resource('courses/course-id.course-class-id.summery','courses\courseClasses\CourseClassSummariesController',['only'=>['index','destroy','show']]);
Route::resource('courses/course-id.course-class-id.benefit','courses\courseClasses\CourseClassBenefitsController',['only'=>['index','destroy','show']]);
Route::resource('courses.exam','courses\courseClasses\CourseExamController');
Route::get('courses/course-id.course-class-id.exam/delete','courses\courseClasses\CourseClassExamControlle@destroy');
//Route::PATCH('courses/course-id/{courseID}/course-class-id/{courseClassID}/exam','courses\courseClasses\CourseClassExamController@update');

/*
|--------------------------------------------------------------------------
| views Routes
|--------------------------------------------------------------------------
*/
Route::get('/','IndexController@index');
Route::get('/icons-font-awesome','icons\IconController@iconsFontAwesome');
Route::get('/icons-feather','icons\IconController@iconsFeather');
Route::get('/inputs','IndexController@inputsExamples');
Route::get('/analytics','IndexController@analyticsExample');
/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
*/



