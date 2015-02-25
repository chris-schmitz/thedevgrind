@extends('app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
                <h2>{{ $post->title  }} <small>{!! link_to_route('post.edit', "edit", ['post' => $post->slug]) !!}</small></h2>
        <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            {{ $post->body }}
        </div>
        <div class="panel-footer clearfix">
            {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id ]]) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
