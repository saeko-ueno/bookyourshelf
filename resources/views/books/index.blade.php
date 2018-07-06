
@if ($books)
    <div class="row">
        @foreach ($books as $book)
            <div class="item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $book->image_url }}" alt="">
                        </div>
                        <div class="panel-body">
                            <p class="item-title"><a href="#">{{ $book->title }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

