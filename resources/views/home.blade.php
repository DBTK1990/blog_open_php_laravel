@extends('master')

@section('title','Homepage')

@section('content')

{!! Form::model(new APP\Message(),['route' => ['message.create']]) !!}
{!! Form::text("title") !!}
{!! Form::text("content") !!}
{!! Form::submit("new Message") !!}
{!! Form::close() !!}

 Recent Messages:
    <br/>
 <ul>

    @foreach($messages as $message)
        <li>
            <strong>
                {{ $message->title }}
            </strong>
            <br/>
                {{ $message->content }}
            <br/>
            {{$message->created_at}}
            <br/>
            {{$message->created_at->diffForHumans()}}
        </li>
    @endforeach
</ul>
@endsection
