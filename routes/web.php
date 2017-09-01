<?php



Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@index'
]);



//Route for pages
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/service', 'PagesController@service');
Route::get('/blog', [
    'as' => 'blog',
    'uses' => 'PagesController@blog'
]);

Route::get('/work', 'PagesController@work');
Route::get('/contact', 'PagesController@contact')->name('contact');

//Route for hitting posts
Route::get('/show-post/{id}', [
    'as' => 'show-post',
    'uses' => 'PostController@getShow'
]);

//Route for hitting the admin
Route::get('/cms', function(){
    return view('admin.default');
});

//Route for cms pages

Route::get('/cms/work', 'CmsController@work');
Route::get('/cms/blog', [
    'as' => 'blog-home',
    'uses' => 'CmsController@blog'
]);
Route::get('/cms/edit', 'CmsController@edit');
Route::get('/cms/delete', 'CmsController@delete');
Route::get('/cms/post', 'CmsController@post');

Route::resource('/content', 'BlogController');

Route::resource('/post', 'PostController');


