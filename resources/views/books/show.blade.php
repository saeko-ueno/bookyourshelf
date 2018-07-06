@extends('layouts.app')

@section('content')

    <h1>id = {{ $book->id }} のメッセージ詳細ページ</h1>

    <p>タイトル: {{ $book->title }}</p>
    <p>メッセージ: {{ $book->content }}</p>

    {!! link_to_route('books.edit', 'このメッセージ編集', ['id' => $book->id]) !!}

    {!! Form::model($book, ['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection