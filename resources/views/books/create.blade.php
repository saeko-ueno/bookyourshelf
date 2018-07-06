@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($book, ['route' => 'books.store']) !!}

        {!! Form::label('image_url', '画像URL:') !!}
        {!! Form::text('image_url') !!}
        
        {!! Form::label('author', '著者:') !!}
        {!! Form::text('author') !!}
        
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::submit('登録') !!}
        
         {!! Form::hidden('userId',$userId) !!}
    {!! Form::close() !!}
    
   

@endsection