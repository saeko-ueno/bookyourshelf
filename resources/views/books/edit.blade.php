

    <h1>id: {{ $book->id }} のbook編集ページ</h1>

    {!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'put']) !!}

        {!! Form::label('image_url', '画像url:') !!}
        {!! Form::text('image_url') !!}
        
        {!! Form::label('author', '作者:') !!}
        {!! Form::text('author') !!}
        
        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

