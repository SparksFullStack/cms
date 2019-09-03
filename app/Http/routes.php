<?php
use App\Post;
use App\User;
use App\Country;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function() {
//     return Post::find(1);
// });

// Route::get('/test2', function() {
//     return User::find(1);
// });

// Route::resource('/posts', 'PostsController');
// Route::get('/contact', 'PostsController@contact');
// Route::get('/post/{id}', 'PostsController@show_post');

// Route::get('/add-to-db', function() {
//     DB::insert('INSERT INTO posts(title, content) values(?, ?)', ['Learning Laravel', 'I am learning Laravel to make a kick ass app!']);
//     return 'inserted my g';
// });

// Route::get('/find', function(){
//     $posts = Post::all();
//     foreach($posts as $post) {
//         return $post->title;
//     };
// });

// Route::get('/findwhere/{id}', function($id) {
//     $posts = Post::where('id', $id)->orderBy('id', 'DESC')->take(1)->get();
//     return $posts;
// });

// Route::get('/findmore', function() {
//     $posts = Post::findOrFail(1);

//     return $posts;
// });

// Route::get('/basicinsert', function() {
//     $post = new Post;

//     $post->title = 'This is from the basic insert route';
//     $post->content = 'This is the content';
//     $post->save();
// });

// Route::get('/basicupdate', function() {
//     $post = Post::find(3);

//     $post->title = 'This is from the basic insert route';
//     $post->content = 'This is the content';
//     $post->save();
// });

// Route::get('/create', function() {
//     Post::create(['title'=>'here is our new title', 'content'=>'and here is the content']);
// });

// Route::get('/update/{num}', function($num) {
//     Post::where('id', $num)->update(['title'=>'updated', 'content'=>'also updated']);
// });

// Route::get('/delete/{id}', function($id) {
//     $post = Post::find($id);
//     $post->delete();
// });

// Route::get('/softdelete/{id}', function($id) {
//     Post::find($id)->delete();
// });

// Route::get('/user/{id}/post', function($id) {
//     return User::find($id)->post;
// });

// Route::get('/post/{id}/user', function($id) {
//     return Post::find($id)->user;
// });

// Route::get('/posts/{id}', function($id) {
//     $posts = User::find($id)->post;
//     return $posts;
// });

// * One to Many Relationship
Route::get('/posts/one_to_many', function() {
    $user = User::find(1);

    foreach ($user->posts as $post) {
        echo $post;
    }
});

// * Pivot Table Route 
Route::get('/users/role/{id}', function($id) {
    return User::find($id)->roles;
});

// * Has Many Through Route
Route::get('/user/country', function() {
    $country = Country::find(1);

    foreach ($country->posts as $post) {
        return $post->title;
    }
});