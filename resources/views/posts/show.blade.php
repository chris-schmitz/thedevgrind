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
            {!! Markdown::defaultTransform( $post->body ) !!}

            <hr>
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES * * */
                var disqus_shortname = 'thedevgrindapp';
                
                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

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
