@extends('app')

@section('content')
    <div class="jumbotron">
        <h1>TheDevGrind</h1>
        <p>
            A blog about programming, music, and (insert category here).
        </p>
    </div>

    <div class="row">
      @foreach($lastSix as $post)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <div class="caption">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->published_on }}</p>
                <p>
                    {!! link_to_route('post.show', "Read", ['post' => $post->slug], ['class' => 'btn btn-primary']) !!}
                </p>
              </div>
            </div>
          </div>
      @endforeach
    </div>

@stop
