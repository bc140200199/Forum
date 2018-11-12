  <div class="list-group">
  	@forelse($threads as $thread)
  	<a href="{{ route('forum.thread.show', $thread->id) }}" class="list-group-item">
  		<h4 class="list-group-item-heading">{{ $thread->subject}}</h4>
  		<p class="list-group-item-text">{{ str_limit($thread->thread,100) }}</p>
  	</a>

  	@empty

  	<h1>No threads</h1>

  	@endforelse
  </div>
