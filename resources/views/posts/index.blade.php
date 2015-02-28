@extends('app')


@section('content')

    @if(Session::has('error'))
        {{ Session::get('error') }}
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>All Blog Posts</h2>
        </div>
        <div class="panel-body">
            <ul>
            @foreach($posts as $post)
                <li>
                    {!! link_to_route('post.show', $post->title, ['post' => $post->slug]) !!}
                </li>
            @endforeach
            </ul>
        </div>
    </div>

@endsection
