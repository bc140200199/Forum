@extends('layouts.app')
@section('content')


<h1 align="center"> Welcome </h1>
<h1 align="center"><a href="">Forums</a>
</h1>
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                   

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Forum Name</th>
                                </tr>
                            </thead>
                          <tbody>
                               @forelse($forums as $forum) 
                                <tr>
                                    <td>{{ $forum->forum }}</td>
                                    
                                    <td>
                                        <a href="#" class="btn btn-default">Edit</a>
                                        <form action="" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No entries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection