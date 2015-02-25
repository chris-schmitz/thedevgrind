@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Edit the post: <span class="info">{{$post->title}}</span></h2>
        </div>
        <div class="panel-body">
            @include('errors._list')
            {!! Form::model($post, [ 'method' => 'PUT', 'route' => ['post.update',  $post->id]]) !!}
                @include('posts.partials.form', ['submitButton' => 'Save Post Edits'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection
