
<div class="form-group">
    {!! Form::checkbox('published', null) !!}
    {!! Form::label('Publish', '') !!}
</div>
<div class="form-group">
    {!! Form::label('Published Date', '') !!}
    {!! Form::input('date', 'published_on', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('title', '') !!}
    {!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', '') !!}
    {!! Form::text('slug', null, ['placeholder' => 'Slug'  ,'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', '') !!}
    {!! Form::textarea('body', null, ['placeholder' => 'Body'  ,'class' => 'form-control']) !!}
</div>
{!! Form::submit($submitButton, ['class' => 'btn btn-success']) !!}

@section('customJavascript')
    @include('posts.partials.publishedCheckboxActions')
@stop
