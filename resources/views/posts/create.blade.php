
@extends('layouts.design')

@section('content')
        
<div class="col-md-9 col-md-offset-3">
    <h1 class="create-post">Create New Post</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
            <div class ="form-group">
                {{Form::label('post_title', 'Post Title')}}
                {{Form::text('post_title', ' ', [ 'class' => 'form-control', 'placeholder' => 'Enter title'])}}
            </div>
        
            <div class ="form-group">
                {{Form::label('post_content', 'Post Content')}}
                {{Form::textarea('post_content', ' ', ['id' => 'article-ckeditor',  'class' => 'form-control',  'placeholder' => 'Enter content to publish'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Publish', ['class' => 'btn btn-primary publish-btn'])}}
        {!! Form::close() !!}
</div>
@endsection
