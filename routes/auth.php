<?php
Route::resource('instructor', 'instructors\InstructorsController', [
    'only' => ['index','show'],
    // 'except' => ['edit', 'create']
]);
Route::get('/instructor-book', function () {
    return view('site.instructors.instructor-book');
 });
// courses
Route::get('/courses', 'courses\CoursesController@index');


//  notifications
Route::resource('notifications', 'notifications\notifications\BlogController', [
    'only' => ['index','show'],
    // 'except' => ['edit', 'create']
]);
// notifications Comments
Route::post('notifications/{id}/comment','notifications\comments\CommentsController@store');
Route::patch('notifications/{id}/updateComment','notifications\comments\CommentsController@update');
Route::delete('notifications/deleteComment/{id}','notifications\comments\CommentsController@destroy');

//   profile
Route::get('profile', 'profile\ProfileController@index');
Route::post('profile', 'profile\ProfileController@editProfileInfo');
Route::post('profile/change-password', 'profile\ProfileController@UpdatePassword');
Route::get('profile-info', 'profile\ProfileController@profile');
// about
Route::get('/about', 'about\AboutController@index');
// supoort
Route::resource('/tickets', 'support\ticketsController');
Route::get('support', 'support\SupportController@index');
//Route::get('/ticket', 'support\TicketsController@index');
Route::resource('proposals', 'support\ProposalsController');
Route::get('questions', 'support\QuestionsController@index');
Route::resource('contactUs', 'contactUs\contactUsController');
Route::get('sitePolicy', 'sitePolicy\sitePolicyController@index');
Route::get('how-it-work', 'howItWork\howItWorkController@index');
//notifications
Route::get('notifications', 'notifications\NotificationsController@index');

//course desc
Route::get('exam', 'exams\ExamsController@index');
Route::get('course/description', 'coursesDesc\CoursesDescController@index');
Route::get('course/description/ques-book', 'coursesDesc\QuesBookController@index');
Route::get('course/description/signs', 'coursesDesc\SignsController@index');
Route::get('course/description/contact', 'coursesDesc\ContactInstructorController@index');
Route::get('course/description/questioned', 'coursesDesc\QuestionedController@index');

Route::get('course/description/summingUp', 'coursesDesc\SummingUpController@index');
Route::get('course/description/summarize ', 'coursesDesc\SummarizeController@index');

Route::get('course/description/benefits', 'coursesDesc\BenefitsController@index');
Route::get('course/description/chapterBenefits ', 'coursesDesc\ChapterBenefitsController@index');

Route::get('course/description/videos', 'coursesDesc\VideosController@index');
Route::get('course/description/finalExam', 'coursesDesc\FinalExamController@index');
Route::get('course/description/chapterTest', 'coursesDesc\ChapterTestController@index');
Route::get('course/description/researchResults', 'coursesDesc\ResearchResultsController@index');
