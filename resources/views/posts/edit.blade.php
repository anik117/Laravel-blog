@extends ('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{form::text('title', $post->title, ['class' => 'form-control', 'placeholder'=> 'Post Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=> 'Body Text'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection