@extends('app')


@section('content')

    @if(Session::has('error'))
        {{ Session::get('error') }}
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>All Blog Posts</h2>
        </div>
        <table class="table">
            <tr>
                <th>Post</th>
                <th>Published on</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>
                        {!! link_to_route('post.show', $post->title, ['post' => $post->slug]) !!} 
                    </td>
                    <td>
                        {{ $post->published_on }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
