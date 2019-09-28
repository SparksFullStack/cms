<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
Use App\Post;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::all();
        return view('posts.index', compact('allPosts'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // NOTE: You can use "posts.create" or "posts/create" for these nested views
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // * Save Method 1
        // $newPostRecord;
        // $newPostRecord['title'] = $request->title;
        // $newPostRecord['content'] = $request->content;
        // return $newPostRecord;
        
        // * Save Method 2
        // $newPostRecord = new Post;
        // $newPostRecord->title = $request->title;
        // $newPostRecord->content = $request->content;
        // $newPostRecord->save();

        // * Save Method 3
        Post::create($request->all());
        return redirect('/posts');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = App\Post::whereId($id);
        return $post;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function contact() {
        return view('contact');
    }
    public function show_post($id) {
        //return view('post')->with('id', $id);
        return view('post', compact('id'));
    }
}