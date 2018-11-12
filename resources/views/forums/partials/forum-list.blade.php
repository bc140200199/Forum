  <div class="list-group">
  	@forelse($forums as $forum)
  	<a href="{{ route('forum.show', $forum->id) }}" class="list-group-item">
  		<h4 class="list-group-item-heading">{{ $forum->forum_name }}</h4>
  	</a>
  	@empty
  	<h1>No forums</h1>
  	@endforelse
  </div>


  
          
          
