@extends('layouts.front')

@section('content')
<br>
{{-- <div align="right">
  <a class="btn btn-primary" href="{{route('forum.thread.create')}}">Create Thread</a>
</div> --}}

<div align="right">                                                  
  <a class="btn btn-primary" href="{{route('forum.thread.create', $forum->id)}}">Create Thread</a>
</div>
  {{-- <h4>{{$forum->forum_name}}</h4> --}}
 
  <h1>Threads</h1>
  <hr>
  <div class="container">
      <ul class="list-group">
          
        @foreach($forum->threads as $thread)
        <div class="row">
        <a href="{{ route('forum.thread.show', [$forum->id, $thread->id]) }}">
  
            {{ $thread->thread }}

            <hr>
        </a>
      </div>
      </ul> 
    
        
        @endforeach
        



      </div>

  





@endsection