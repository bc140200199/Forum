<?php

namespace App\Http\Controllers;
use App\User;
use App\Thread;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ThreadController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth')->except('index');
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $threads = Thread::paginate(15);
        return view('threads.index', compact('threads'));
        
    

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($forumId)
    {
    
        return view('threads.create', compact('forumId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request, $forumId)
    {

    
        $this->validate($request,[
            'subject'=>'required|min:10',
            'type'=>'required',
            'thread'=>'required|min:20',
            

        ]);
    
        $data =  $request->only(['subject', 'thread', 'type']);
         // dd($data);
        $data['forum_id'] = $forumId;
        $data['user_id']= auth()->user()->id;

        // new Thread(request(['user_id','forum_id'])

        // auth()->user()->publish($forumId, new Thread(request(['user_id','forum_id'])));

        Thread::create($data);
        // return redirect()->back()->withMessage('Thread Created');


        session()->flash(
          'message', 'Thread Created.'
        );


   

            return redirect()->route('forum.show', ['forumId' => $forumId]);
          // ;'forum.show', $forum->id
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($forumId, Thread $thread)
    {
        return view('threads.single', compact('thread'));
    }

    /**Thread $thread
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit($forumId, Thread $thread)
    {
        return view('threads.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update($forumId, Request $request, Thread $thread)
    {
        
        $this->validate($request,[
            'subject'=>'required|min:10',
            'type'=>'required',
            'thread'=>'required|min:20',
            

        ]);
    
        // $data = $request->only(['subject', 'thread', 'type']);
        //  // dd($data);
        // $data['forum_id'] = $forumId;
    
        
        $thread->update($request->all());
        // return redirect('/')->withMessage('Thread Updated');
        session()->flash(
          'message', 'Thread Created.'
        );


   

            return redirect()->route('forum.show', ['forumId' => $forumId]);
       
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy($forumId, Thread $thread)
    {
        //dd($forumId);
        $thread->delete();
        return redirect()->route('forum.show', $forumId);
        // return redirect()->route('forum.show', $forum->id );
        // route('forum.show', ['forum->id', $thread->id]);
        // forum.show', $forum->id
    }
}
