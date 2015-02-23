@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Create a Page</h2>
        </div>
        <div class="panel-body">
            @include('errors._list')
            {!! Form::open( [ 'route' => 'page.store' ]) !!}
                @include('pages.partials.form', ['submitButton' => 'Create Page'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection
