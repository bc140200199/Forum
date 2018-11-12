<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/minty/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>
<body>
@include('layouts.nav')
@yield('banner')
<br>
<div class="container">
 <div class="row">
  <div class="col-md-3">
    <ul class="list-group">
      <a href="{{route('forum.index')}}" class="list-group-item">Forums</a>
    </ul>
  </div>
    <div class="col-md-9">
   <div class="content-wrap well">
     @yield('content')
   </div>
 </div>
 
 </div>
</div>

   
<script src="https://code.jquery.com-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>