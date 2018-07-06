<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId=\Auth::id();
     $books = \DB::table('books')->where('user_id', $userId)->orderBy('created_at', 'DESC')->take(10)->get();
       
        return view ('books.index',[
            'books'=>$books,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $userId=\Auth::id();
        
        //print_r($userId);
        //exit;
        $book = new Book;
        $book->image_url = '';
        $book->author = '';
        $book->title = '';
        $book->comment = '';
        $book->recommend = '';
        $book->tradable = '';
     
        return view('books.create')->with(['book'=>$book,'userId'=>$userId]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->image_url = $request->image_url;
        $book->author = $request->author;
        $book->title = $request->title;
        $book->comment = $request->comment;
        $book->recommend = $request->recommend;
        $book->tradable = $request->tradable;
        $book->user_id = $request->userId;
        //var_dump($book);
        //exit;
        $book->save();
     
        return view('users.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $book = Book::find($id);

        return view('books.show', [
            'book' => $book,
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        
        return view ('books.edit',[
            'book'=>$book,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        
        $book->image_url = $request->image_url;
        $book->author = $request->author;
        $book->title = $request->title;
        $book->comment = $request->comment;
        $book->recommend = $request->recommend;
        $book->tradable = $request->tradable;
        $book->save();
        
        return view('users.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return view('users.show');
    }
}
