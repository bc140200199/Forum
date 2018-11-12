@extends('layouts.front')
@section('content')

  <h2>Threads</h2>
  @include('threads.partials.thread-list')
  @endsection

 {{--  @section('content')
    <div class="container">
        
        <ul class="nav nav-pills">
             @foreach($threads as $thread)
                {{ $thread->forum->id }}
            @endforeach 
        </ul>

    </div>
@endsection
 --}}
