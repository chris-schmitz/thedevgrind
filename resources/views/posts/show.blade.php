@extends('app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
                <h2>{{ $post->title  }} 
                    @if(Auth::check() && Auth::user()->administrator)
                        <small>{!! link_to_route('post.edit', "edit", ['post' => $post->slug]) !!}</small>
                    @endif
                </h2>
        <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            {{ $post->body }}
        </div>
        @if(Auth::check() && Auth::user()->administrator)
            <div class="panel-footer clearfix">
                {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id ]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        @endif
    </div>

@endsection
