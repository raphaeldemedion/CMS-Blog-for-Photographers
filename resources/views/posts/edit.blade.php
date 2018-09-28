@extends('layouts.design')

@section('content')
        
<div class="col-md-9 col-md-offset-3">
    <h1 class="edit-post">Edit Post</h1>
        {!! Form::open(['action' => ['PostsController@update', $posts->id] , 'method' => 'POST',  'enctype' => 'multipart/form-data' ]) !!}
            <div class ="form-group">
                {{Form::label('post_title', 'Post Title')}}
                {{Form::text('post_title', $posts->post_title, [ 'class' => 'form-control', 'placeholder' => 'Enter title here'])}}
            </div>
        
            <div class ="form-group">
                {{Form::label('post_content', 'Post Content')}}
                {{Form::textarea('post_content', $posts->post_content, ['id' => 'article-ckeditor',  'class' => 'form-control',  'placeholder' => 'Post Content'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Save', ['class' => 'btn btn-primary publish-btn'])}}
        {!! Form::close() !!}
</div>
@endsection