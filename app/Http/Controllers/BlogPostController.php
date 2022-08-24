<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        // show all blog posts
        $posts = BlogPost::all();
        // return $posts; 

        return view('allblogposts')->with('posts', $posts);
    }

    public function create()
    {
        //show form to create a blog post
        return view('createblogpost');
    }

   
    public function store(Request $request)
    {
        //store a new post
        $post = new BlogPost;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = 11;
        $post->imagee = null;

        $post->save();

        return redirect('/')->with('success', 'Blog Post Form Data Has Been inserted');

    }

    public function show( $id)
    {
        //show a single blog post
        $posts = BlogPost::all();
        $post = $posts->find($id);
        return view('singleblogpost')->with('post', $post);
    }

    
    public function edit(Request $request, $id)
    {
        //show form to edit the post
        $post = BlogPost::findOrFail($id);
        return view('editblogpost')->with('post', $post);
    }

    
    public function update(Request $request, $id)
    {
        //save the edited post
        $post = BlogPost::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return view('allblogposts')->with('posts', $posts);
    }

    
    public function destroy($id)
    {
        //delete a post
        $post = BlogPost::findOrFail($id);
        $post->delete();

        return redirect('/')->with('fail', 'Blog Post has been deleted');
    } 
}
