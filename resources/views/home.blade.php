@extends('layouts.master')

@section('content')
@include('layouts.navbar')

        <main role="main" class="col-sm-10 ml-sm-auto col-mb-10 pt-3">
            <h2> Welcome {{Auth::user()-> name}} </h2>
            <h1> Posts
                <a href="{{ route('post.form') }}">
                <button type="button" class="btn btn-primary btn-sm">Create Post</button>
                </a>
            </h1>
            @if(Session::has('success'))
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="message" class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                </div>
            </div>
            @endif

            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Posts</th>
                    <th>Created on</th>
                    <th>Last updated</th>
                </tr>
                </thead>
                <tbody>
                @if($posts)
                    @foreach($posts as $post)
                    <tr>
                        <th> {{$loop -> iteration }}</th>
                        <td> {{$post -> title }}</td>
                        <td> {{$post -> name }}</td>
                        <td> <a href="{{ route('post.detail', ['id' =>$post->id]) }}">See post</a> </td>
                        <td> {{ Carbon\Carbon::parse($post->created_at)->format('d.m.Y. h:i:s')}}</td>
                        <td> {{ Carbon\Carbon::parse($post->updated_at)->format('d.m.Y. h:i:s')}}</td>
                    </tr>
                    @endforeach
                @else
                    <p class="text-center text-primary">No Posts created yet"</p>
                @endif
                </tbody>
            
        </main>
        
    </div>
</div>
@endsection
