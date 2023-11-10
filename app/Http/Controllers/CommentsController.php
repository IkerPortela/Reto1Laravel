<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comments::all();
        return view('posts.show',['comments' => $comments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = new Comments();
        $comment->text = $request->text;
        $comment->usedTime = $request->usedTime;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect()->route('posts.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $comment)
    {
        return view('comments.edit',['commentary'=>$comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $comment)
    {
        $posts = Post::all();
        $comment->text = $request->text;
        $comment->save();
        return view('posts.index',['posts'=>$posts]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $comment)
    {
        $comment->delete();
        return redirect()->route('posts.index');
    }
}
