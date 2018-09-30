<?php
use App\Post;
use App\User;
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
//
//Route::get('/properties', function () {
//
//    $properties = DB::table('properties')->latest()->get();
//
//
//    return view('layouts/index', compact('properties'));
//
//
//});
//Route::get('/properties/{property}', function ($id) {
//
//    $properties = DB::table('properties')->find($id);
//
//    return view('layouts/show', compact('properties'));
//
//});
//
//Route::get('/', function () {
//
//
//    return view('layouts/show');
//
//});

//Updating DB
//Route::get('/update', function() {
//    $updated=DB::update('update users set title = "update title" where id = ?',[1]);
//    return $updated;
//});
//
//Reading DB
//Route::get('/read', function(){
//    $results = DB::select('select * from properties where id =?', [1]);
//
//    foreach($results as $property){
//
//        return $property->title;
//    }
//});

//Deleting from DB
//
//Route::get('/delete', function(){
//
//    $deleted = DB::delete('delete from users where id = ?', [1]);
//
//    return $deleted;
//});

//Home
Route::get('/','HomeController@welcome')->name('welcome');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dash')->name('dash');

Auth::routes();

Route::get('tinker', function (){
    return view('js-playground');
});

//Route::get('/home_auth', 'HomeController@index')->name('home');

Route::get('/form', function (){
    return view('form');
});

Route::get('/browse_properties', function (){

    $properties = DB::table('properties')->get();

    return view('browse_properties', ['properties' => $properties]);


});
Route::get('/new-form', 'PropertyController@addProperty')->name('newPropertyForm');

Route::get('/read', function(){
    $posts = Post::all();

    foreach($posts  as $post) {

      return $post->title;

    }
});

Route::get('/find', function(){

    $posts = Post::find(4);
    return $posts->title;

});

Route::get('/findwhere', function(){

    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
    return $posts;
});

Route::get('/findmore', function(){

    $posts = Post::where('users_count', '<', '50')-> firstOrFail();

    return $posts;

});

Route::get('/basicinsert', function (){

    $post = new Post;

    $post->title = 'James is a legend';
    $post->save();


});

Route::get('/basicinsert2', function (){

    $post = Post::find(1);

    $post->title = 'New inserted title number 1';
    $post->save();


});

Route::get('/create', function(){

    Post::create(['title'=> 'the create method']);
});

Route::get('/update', function(){

    Post::where('id', 3)->where('title', 'is mr')->update(['title'=>'time to update baby']);
});


Route::get('/delete', function(){

    $post = Post::find(2);

    $post-> delete();
});

Route::get('/delete2', function(){

    Post::destroy([3.4,5]);
    Post::where('is_admin',0)->delete();
});

/*
|--------------------------------------------------------------------------
| Eloquent relationships
|--------------------------------------------------------------------------
*/

//One to one relationship

Route::get('/user/{id}/post', function ($id){

    return User::find($id )->post->content;
});

Route::get('/post/{id}/user', function ($id){

    return Post::find($id)->user->name;
});

//One to many relationship


/*
|--------------------------------------------------------------------------
| CRUD application
|--------------------------------------------------------------------------
*/

Route::resource('/posts', 'PostController');

Route::get('/user/{id}/post', function ($user_id){

    return User::find($user_id)->post;

})->name('userPosts');



Route::get('/usersposts/{user_id}', function ($user_id){

    $posts = Post::where('user_id','=',$user_id)->get();


    return view('posts/index', ['posts' => $posts]);
})->name('usersPosts');