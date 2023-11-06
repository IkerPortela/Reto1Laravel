<?php

namespace App\Http\Controllers;

use App\Models\Comments;
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
        $commentary = new Comments();
        $commentary->text = $request->text;
        $commentary->usedTime = $request->usedTime;
        $commentary->post_id = $request->post_id;
        $commentary->save();
        return redirect()->route('posts.show');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comments $commentary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comments $commentary)
    {
        return view('comments.edit',['commentary'=>$commentary]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comments $commentary)
    {
        $commentary->text = $request->text;
        $commentary->usedTime = $request->usedTime;
        $commentary->save();
        return view('posts.show',['commentary'=>$commentary]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comments $commentary)
    {
        $commentary->delete();
        return redirect()->route('posts.show');
    }
}
