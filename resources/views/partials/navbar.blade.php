<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">TheDevGrind</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach($pageList as $slug => $title)
                    <li>
                    {!! link_to_route('page.show', $title, ['page' => $slug] ) !!}
                    </li>
                @endforeach
                @if(Auth::check() && Auth::user()->administrator)
                <li>
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>{!! link_to_route('page.index', 'All') !!}</li>
                        <li>{!! link_to_route('page.create', 'Create') !!}</li>
                    </ul>
                </li>
                @endif
                <li>
                    @if(Auth::check() && Auth::user()->administrator)
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Posts <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{!! link_to_route('post.index', 'All') !!}</li>
                            <li>{!! link_to_route('post.create', 'Create') !!}</li>
                        </ul>
                    @else
                        {!! link_to_route('post.index', 'Blog') !!}
                    @endif
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/auth/login">Login</a></li>
                @else
                    @if( Auth::user()->administrator)
                        <li><a href="/auth/register">Register</a></li>
                    @endif
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
