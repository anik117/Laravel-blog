@extends ('layouts.app')

@section('content')
    <a class="btn btn-default" href="/posts">Go Back</a>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <div class="well">
        <p>{!! $post->body !!}</p>
    </div>
    <hr>
    <a class="btn btn-default" href="/posts/{{$post->id}}/edit">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection