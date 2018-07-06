@extends('layouts.app')

@section('content')

    <h1>id: {{ $message->id }} のbook編集ページ</h1>

    {!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'put']) !!}

        {!! Form::label('image_url', '画像url:') !!}
        {!! Form::text('image_url') !!}
        
        {!! Form::label('author', '作者:') !!}
        {!! Form::text('autor') !!}
        
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection