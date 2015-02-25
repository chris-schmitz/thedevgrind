@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Create a Post</h2>
        </div>
        <div class="panel-body">
            @include('errors._list')
            {!! Form::open( [ 'route' => 'post.store' ]) !!}
                @include('posts.partials.form', ['submitButton' => 'Create Post'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection
