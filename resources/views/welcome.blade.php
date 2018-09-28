@extends('layouts.app')
        @section('title') Admin Login @stop
                @section('content')
                        <div class="container"> 
                        @guest
                                <div class="jumbotron text-center">
                                        <h1>Welcome to Tancho Blog</h1>
                                        <p>Please Login or Register to Continue</p>
                                         <p><a class ="btn btn-primary btn-sm" href="/login" role="button">Login</a> <a class ="btn btn-success btn-sm" href="/register" role="button">Register</a></p>
                                </div>
                        @else
                        <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">Dashboard</div>
                                
                                                <div class="card-body">
                                                    @if (session('status'))
                                                        <div class="alert alert-success" role="alert">
                                                            {{ session('status') }}
                                                        </div>
                                                    @endif
                                
                                                    Hello {{ Auth::user()->name }}, you are logged in! <br/> <br/>
                                                    @if (count($posts) > 0)
                                                    <h3>Your Blog Posts</h3>
                                                        <table class="table table-striped">
                                                        <tr>
                                                            <th>Post Title</th>
                                                            <th></th>
                                                            <th></th>
                                                        </tr>
                                                            @foreach ($posts as $post)
                                                                <tr>
                                                            <td><a href="/posts/{{$post->id}}">{{$post->post_title}}</a></td>
                                                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                                            <td>
                                                                {!!Form::open(['action' => [ 'PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                                                    {{Form::hidden('_method', 'DELETE') }}
                                                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                                {!! Form::close() !!}
                                                            </td>
                                                        </tr>
                                                                
                                                            @endforeach
                                                    </table>
                                                    @else
                                                        <p>You have no posts</p>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        @endguest
                </div>
                       

                @endsection