@extends('layouts.front')
@section('content')
 @include('layouts.partials.errors')
 @include('layouts.partials.success')
<div class="well">
 <form class="form-vertical" action="{{ route('forum.thread.update', [ $thread->forum->id, $thread->id])}}" method="post" role="form" id="create-thread-form">
		{{csrf_field()}}
		{{method_field('put')}}
		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" class="form-control" name="subject" id="" placeholder="Input..." value="{{$thread->subject}}">
		</div>
		<div class="form-group">
			<label for="type">Type</label>
			<input type="text" class="form-control" name="type" id="" placeholder="Input..." value="{{$thread->type}}">
		</div>
		<div class="form-group">
			<label for="thread">Thread</label>
			<textarea class="form-control" name="thread" id="" placeholder="Input..." value="">{{$thread->thread}}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection