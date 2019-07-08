@extends('layouts.master')

@section('content')
@include('layouts.navbar')

    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1>Edit Post<h1>
        <div class="col-md-6">
            <form method="post" action="{{ route('post.update',['id' =>$post->id]) }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="id_title" name="title" aria-describedby="title" value=" {{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="id_description" rows="10" name="description">
                {{ $post -> description }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
            </form>
        </div>
    </main>

    </div>
</div>
@endsection


