{{-- @extends('layouts.front')
@section('content')
<div class="col-sm-8">
	
	<h1>Sign In</h1>	
 <form method="POST" action="/login">
		{{ csrf_field() }}
	 <div class="form-group">
	 	<label for="name">Name</label>
	 	<input type="name" class="form-control" id="name" name="name" required>
	 </div>
	 <div class="form-group">
	 	<label for="email">Email</label>
	 	<input type="email" class="form-control" id="email" name="email" required>
	 </div>
	 <div class="form-group">
	 	<label for="password">Password</label>
	 	<input type="password" class="form-control" id="password" name="password" required>
	 </div>
	 
	 <div class="form-group">
	 	<button type="submit" class="btn btn-primary">Sign In</button>
	 </div>
	 
	@include('layouts.partials.errors')
    @include('layouts.partials.success')

 </form>
</div>

@endsection --}}