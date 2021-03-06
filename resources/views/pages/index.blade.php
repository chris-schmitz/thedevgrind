@extends('app')


@section('content')

    @if(Session::has('error'))
        {{ Session::get('error') }}
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>All Pages</h2>
        </div>
        <div class="panel-body">
            <ul>
            @foreach($pages as $page)
                <li>
                    {!! link_to_route('page.show', $page->title, ['page' => $page->slug]) !!}
                </li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection
