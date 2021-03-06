@extends('app')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
                <h2>{{ $page->title  }} 
                    @if(Auth::check() && Auth::user()->administrator)
                        <small>{!! link_to_route('page.edit', "edit", ['page' => $page->slug]) !!}</small>
                    @endif
                </h2>
        <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            {!! Markdown::defaultTransform( $page->body ) !!}
        </div>
        @if(Auth::check() && Auth::user()->administrator)
            <div class="panel-footer clearfix">
                {!! Form::open(['method' => 'DELETE', 'route' => ['page.destroy', $page->id ]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        @endif
    </div>

<script>
        var Showdown = require('showdown');
        var converter = new Showdown.converter();
        converter.makeHtml('#hello markdown!');
</script>

@endsection
