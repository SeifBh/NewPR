<?php


//ss


use Illuminate\Support\Facades\Mail;


Route::get('/email',function(){

	Mail::send('emails.test',['name'=>'SAFEmed'],function($message)
{
$message->to('belhadjali.seif@gmail.com' , 'Some guy')->subject(trans('front/verify.email-title'));
});


});




Route::group(['middleware' => ['web']], function () {



Route::group(['middleware' => ['auth']], function () {



	// Admin
	Route::get('admin', [
		'uses' => 'AdminController@admin',
		'as' => 'admin',
		'middleware' => 'admin'
	]);

Route::get('/contact/IndexMultipleMessage','ContactController@indexMultipleMessage');
Route::post('/contact/MultipleMessage','ContactController@multiplemsg');



	
	Route::get('Archive_admin/{msg_idx}','ContactController@Archive_admin');


	Route::get('Archive_to_publish_admin/{msg_idx2}','ContactController@Archive_to_publish_admin');


	Route::get('contact/archive','ContactController@archive_index');




Route::get('testcom','HomeController@indextest');
Route::post('add_ques','HomeController@saveTest');


	// Home

	
	Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');



	Route::get('medias', [
		'uses' => 'AdminController@filemanager',
		'as' => 'medias',
		'middleware' => 'redac'
	]);


//contact from user to admin

		Route::get('@{username}/messages/{id}_{last_reply}', 'ContactController@Inbox');








		Route::post('/reply', [
		'uses' => 'ContactController@ReplyUserToAdmin', 
		'middleware' => 'auth'

	]);

	Route::get('@{username}/messages/e/{id}', 'ContactController@InboxWithoutReply');
	Route::get('@{username}/messages/loadreply/{id}_{last_reply}', 'ContactController@Inbox_LoadReply');
	Route::get('@{username}/messages/testthisfun/{id}', 'ContactController@testthisfun');


	Route::get('testmeto', 'ContactController@testmeto');




Route::resource('messages', 'ContactController@getAllUser_Contact');

	Route::get('Messages/{user_id}/create', 'ContactController@create_message');

	Route::post('/store_message', 'ContactController@store_message');








	Route::get('/@{username}/edit', 'UserController@protest');
	Route::get('/@{username}/questionnaires', 'SurveyController@getQuestionnaire');


Route::post('saveme','CalendarController@saveme');





Route::get('/{username}/calendar','CalendarController@index');
Route::resource('calendar','CalendarController');


/*

	Route::get('@/{usernmae}/survey/{id}', 'SurveyController@questionnairesContent');

		Route::get('@/{usernmae}/survey/{id}', [
		'uses' => 'SurveyController@questionnairesContent', 
		
		'middleware' => 'auth'

	]);

*/

Route::resource('api/questions','QuestionController');


Route::resource('questions','QuestionController');

Route::resource('api/surveys','SurveyController');
Route::resource('surveys','SurveyController');


Route::resource('/api/v1/historiques','Historique2');
//Route::get('statusme','UserController@getstatus');
//Route::resource('/api/v1/questions','Question2');




	Route::get('test', [
		'uses' => 'HomeController@test', 
		'as' => 'test',
		'middleware' => 'auth'

	]);


/*

	Route::get('/sent/{user_id}/{id}', [
		'uses' => 'MessageController@showsent', 
		'as' => 'test',
		'middleware' => 'auth'

	]);


*/

	Route::post('savetoHistory', [
		'uses' => 'SurveyController@savetoHistory', 
		'as' => 'savetoHistory',
		'middleware' => 'auth'
	]);

	Route::get('settings', [
		'uses' => 'HomeController@profile', 
		'as' => 'settings',
		'middleware' => 'auth'
	]);

	Route::post('updateaccount', [
		'uses' => 'UserController@updateAccount', 
		'as' => 'updateaccount'
	]);


	Route::post('uploadfileprofile', [
		'uses' => 'UserController@uploadfileprofile', 
		'as' => 'uploadfileprofile'
	]);

	
	Route::get('setQuestion', [
		'uses' => 'UserController@setQuestion', 
		'as' => 'setQuestion',
		'middleware' => 'auth'

	]);
	
Route::get('@{usernmae}/questionnaires/{id}', 'SurveyController@questionnaires_list');

		Route::get('@{usernmae}/questionnaires/{id}', [
		'uses' => 'SurveyController@questionnaires_list', 
		
		'middleware' => 'auth'

	]);


		Route::get('/@{username}', [
		'uses' => 'UserController@profile'
	]);	



Route::get('users/{username}', 'UserController@profile')->where('profile', '[a-z]+');



		Route::get('survey', [
		'uses' => 'SurveyController@home', 
		'as' => 'survey',
		'middleware' => 'auth'

	]);

/*
		Route::get('sent', [
		'uses' => 'MessageController@sent', 
		'as' => 'sent',
		'middleware' => 'auth'

	]);

*/


		Route::get('/contact/e/{user_id}/{msg_id}', [
		'uses' => 'ContactController@getContactMessageContentWithoutReply', 
		'middleware' => 'auth'

	]);


		Route::get('/contact/{user_id}/{msg_id}_{id_last_reply}', [
		'uses' => 'ContactController@getContactMessageContent', 
		'middleware' => 'auth'

	]);


		Route::get('/@{username}/messages', [
		'uses' => 'ContactController@IndexFrontMessage', 
		'middleware' => 'auth'

	]);


		Route::get('/@{username}/messagesLOAD', [
		'uses' => 'ContactController@IndexFrontMessageLOAD', 
		'middleware' => 'auth'

	]);





		Route::post('/replyadmintouser', [
		'uses' => 'ContactController@ReplyAdminToUser', 
		'middleware' => 'auth'

	]);



/*

		Route::post('/reply', [
		'uses' => 'MessageController@reply', 
		'middleware' => 'auth'

	]);


*/


		Route::get('/@{username}/messages/archive', [
		'uses' => 'ContactController@IndexArchived', 
		'middleware' => 'auth'

	]);



		Route::get('/@{username}/messages/sent', [
		'uses' => 'ContactController@IndexSentMessages', 
		'middleware' => 'auth'

	]);




		Route::get('/@{username}/messages/sent/{id}', [
		'uses' => 'ContactController@ShowsentMessages', 
		'middleware' => 'auth'

	]);
	Route::resource('contact', 'ContactController', [
		'except' => ['show', 'edit']
	]);



	// Blog
	Route::get('blog/order', ['uses' => 'BlogController@indexOrder', 'as' => 'blog.order']);
	Route::get('blog/tag', 'BlogController@tag');
	Route::get('blog/search', 'BlogController@search');

	Route::put('postseen/{id}', 'BlogController@updateSeen');
	Route::put('postactive/{id}', 'BlogController@updateActive');

	Route::resource('blog', 'BlogController');

	// Comment
	Route::resource('comment', 'CommentController', [
		'except' => ['create', 'show']
	]);

	Route::put('commentseen/{id}', 'CommentController@updateSeen');
	Route::put('uservalid/{id}', 'CommentController@valid');

	Route::post('archive_user','ContactController@archive_user');

	Route::post('archive_user2','ContactController@hamham');


	Route::post('publish_user','ContactController@publish_user');



	// User
	Route::get('user/sort/{role}', 'UserController@indexSort');

	Route::get('user/roles', 'UserController@getRoles');




	Route::get('@{username}/dashboard', 'UserController@dashboard');




	Route::post('user/roles', 'UserController@postRoles');

	Route::put('userseen/{user}', 'UserController@updateSeen');

	Route::resource('user', 'UserController');

});


	Route::get('workwithTAG', [
		'uses' => 'HomeController@workwithTAG', 
		'as' => 'workwithTAG'
	]);


	Route::get('TheRules', [
		'uses' => 'HomeController@TheRules', 
		'as' => 'TheRules'
	]);

	Route::get('News', 'BlogController@indexFront');


	Route::get('FAQ', [
		'uses' => 'HomeController@FAQ', 
		'as' => 'FAQ'
	]);

	Route::get('/', [
		'uses' => 'HomeController@index', 
		'as' => 'home'
	]);





	Route::get('Contact_us','ContactController@GuestContact');


	Route::post('Contact_us','ContactController@GuestContact_Execution');


	// Contact

/*
	Route::get('@{username}/messages/{id}', 'MessageController@inbox');

	Route::get('Messages/{user_id}/create', 'MessageController@create');


Route::resource('messages', 'MessageController');
*/

	// Authentication routes...
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');

	// Resend routes...
	Route::get('auth/resend', 'Auth\AuthController@getResend');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	// Password reset link request routes...
	Route::get('password/email', 'Auth\PasswordController@getEmail');
	Route::post('password/email', 'Auth\PasswordController@postEmail');

	// Password reset routes...
	Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
	Route::post('password/reset', 'Auth\PasswordController@postReset');

});