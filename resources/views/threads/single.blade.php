@extends('layouts.front')

@section('content')
<br>
<h4>{{$thread->subject}}</h4>
<br>
	<div class="thread-details">
		{{$thread->thread}} <br>
		{{$thread->user->name}} on
        {{ $thread->created_at->toFormattedDateString()}}
		
	</div>
	<br>
	<div class="action">
	<a href="{{ route('forum.thread.edit', [$thread->forum->id, $thread->id])}}" class="btn btn-primary">Edit</a>
	<form action="{{ route('forum.thread.destroy', [$thread->forum->id, $thread->id])}}" method="POST" class="inline-it">
		{{ csrf_field() }}
		{{method_field('DELETE')}}
		<input class="btn btn-xs btn-danger" type="submit" value="Delete" >
	</form>		

	</div>

	<hr>
	<div class="comments">
		@foreach($thread->comments as $comment)
		<hr>
		
	
		<h4>{{ $comment->comment }}</h4>
		{{$thread->user->name}} on
		{{$comment->created_at->diffForHumans()}}: &nbsp;
		
		@endforeach
	</div>
	<hr>
<form action="{{ route('forum.thread.comment.store', [$thread->forum->id, $thread->id])}}" method="POST">
		{{ csrf_field() }}
		<textarea class="form-control" name="comment" id="" placeholder="Input..." value=""></textarea>
		<br>
		<input class="btn btn-xs btn-primary" type="submit" value="Comment" >
	</form>	
@endsection