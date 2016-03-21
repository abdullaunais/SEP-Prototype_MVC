<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// second comment

////////////////////////////////////////////////////////////////////////
// ---------------------  Main Page Routes Start  ----------------------

//////////  Patient Side Routing /////////
Route::get('/','Front@index');
Route::get('/search','Front@search');
Route::get('/search','Front@search_query');
Route::get('/advanced_search','Front@advanced_search');
Route::get('/register','Front@register');
Route::get('/profile/{doc_name}/{doc_id}','Front@view_profile');
Route::get('/adddoctor','Front@add_doctor');
Route::resource('/adddoctor/save','Front@add_doctor_save');
Route::get('/myaccount/{name}','Front@my_account');
Route::resource('/register/save','Front@register_patient');
Route::resource('/login','Front@login');
Route::resource('/logout','Front@logout');
Route::resource('/forgotten_password','Front@forgotten_password');
Route::resource('/update_user_profile','Front@update_account');


//////////  Admin Side Routing //////////
Route::get('/admin_panel_login','Admin_Front@admin_login');
Route::get('/admin_panel_home','Admin_Front@admin_home');
Route::resource('/admin_login_auth','Admin_Front@admin_login_auth');
Route::resource('/admin_logout','Admin_Front@logout');


Route::get('/pat_admin/{page_name}','Admin_Front@patientAdminPageLoad');
Route::get('/admin_panel/user_comments','Admin_Front@userCommentsLoad');
Route::get('/admin_panel/customize/featured','Admin_Front@featuredDocLoad');
Route::get('/admin_panel/customize/adminload','Admin_Front@adminLoad');
Route::get('/admin_panel/customize','Admin_Front@customize');
Route::get('/admin_panel/user_view/{user_id}','Admin_Front@viewUsers');
Route::get('/admin_panel/inapuser_view/{user_id}','Admin_Front@inapUserDetails');
//Route::get('/admin_panel/user_view1','Admin_Front@add_comment');
Route::get('/admin_panel/rem_com/{user_id}','Admin_Front@removeComment');
Route::get('/admin_panel/users/{skip}/{end}','Admin_Front@viewAllUsers');
Route::get('/admin_panel/users2/{skip}/{end}','Admin_Front@viewNewUsers');
Route::get('/admin_panel/inapusers/test/{skip}/{end}','Admin_Front@inapUsersView');
Route::get('/admin_panel/removeusers/{user_id}','Admin_Front@blockUser');
Route::get('/admin_panel/filterdoc/{rate}/{spec}/{treat}','Admin_Front@filterDoctors');
Route::get('/admin_panel/updatefet/{count}/{doc_id}','Admin_Front@featuredDoctorUpdate');
Route::get('/admin/tip/{des1}/{des2}/{tip}','Admin_Front@tip');
Route::get('/admin/tip/{des1}/{des2}/{tip}/{hid}','Admin_Front@tipUpdate');
Route::get('/admin/update/{id}/{username}/{email}/{password}','Admin_Front@adminUpdate');
Route::get('/admin/tipdel/{id}','Admin_Front@tipDelete');
Route::get('/admin/admindel/{id}','Admin_Front@adminDelete');
Route::get('/reg_admin.php','Admin_Front@registerAdmin');
Route::get('/inap_users','Admin_Front@blockedUsers');

Route::get('/user_view','Admin_Front@usersViewDirect');
Route::get('/dash_board_view','Admin_Front@dashBoardViewDirect');
Route::get('/admin_panel_home/{fname}/{lname}/{uname}/{email}/{pwrd}','Admin_Front@addAdmin');
Route::post('/ajax/admin/{type}/{data}','Admin_Front@registerAdminPageValidate');



// -----------------------  Main Page Routes End  -------------------------
///////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////
// ------------------------  Ajax Routes Start  ---------------------------

Route::post('/ajax/{type}/{data}','AjaxControll@register_page');
Route::post('/ajax','AjaxControll@doc_search_page');
Route::get('/ajax/aa/{skip}/{end}','AjaxControll@doc_search_page1');
Route::post('/ajax/{doc_id}','AjaxControll@get_doctor_comments');
Route::post('/post_comment','AjaxControll@add_comments');
Route::post('/get_comments_by_user','AjaxControll@get_comments_by_user');
Route::post('/send_chat_message','AjaxControll@send_chat_message_by_user');
Route::post('/get_chat_message','AjaxControll@get_chat_message_by_user');

// -------------------------  Ajax Routes End  ----------------------------
///////////////////////////////////////////////////////////////////////////

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

////////////////////////////////////////////////////////////////////////////
// ------------------------  Forum Routes Start  ---------------------------


Route::get('/forum','ForumController@returnHome');
Route::get('/for_admin/{page_name}','ForumController@returnView');

// -------------------------  Forum Routes End  ----------------------------
///////////////////////////////////////////////////////////////////////////