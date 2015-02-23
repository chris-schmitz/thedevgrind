@extends('app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Edit the page: <span class="info">{{$page->title}}</span></h2>
        </div>
        <div class="panel-body">
            @include('errors._list')
            {!! Form::model($page, [ 'method' => 'PATCH', 'route' => ['page.update',  $page->id]]) !!}
                @include('pages.partials.form', ['submitButton' => 'Save Page Edits'])
            {!! Form::close() !!}
        </div>
    </div>

@endsection
