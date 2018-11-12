<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // $forums = Forums::all()->toArray();
        // return view('forums.index', compact('forums'));
        $forums = Forum::paginate(15);
        return view('forums.index', compact('forums'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forums  $forums
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        return view('forums.show', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forums  $forums
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forums  $forums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forums  $forums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forums)
    {
        //
    }
}
