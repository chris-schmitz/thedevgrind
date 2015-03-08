@extends('app')

@section('content')

    <div class="panel panel-default col-md-6 col-md-offset-3">
        <div class="panel-heading">
            <h2>All Tags</h2>
        </div>
        <table class="table">
            <tr>
                <th>Tag Name</th>
                <th class="col-md-4">Actions</th>
            </tr>
            @foreach($tags as $index => $name)
                <tr>
                    <td>{{$name}}</td>
                    <td>{!! link_to_route('tag.destroy', 'Delete', ['method' => 'delete'], ['class' => 'btn btn-danger']) !!}</td>
                </tr>
            @endforeach
        </table>
    </div>

@stop
