<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books=\App\Book::all();
        return view('index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $book= new \App\Book;
        $book->title=$request->get('title');
        $book->author=$request->get('author');
        $date=date_create($request->get('date_published'));
        $format = date_format($date,"Y-m-d");
        $book->date_published = strtotime($format);        
        $book->pages=$request->get('pages');
        $book->type=$request->get('type');
        $book->save();

        return redirect('books')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = \App\Book::find($id);
        return view('edit',compact('book','id'));
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
        //
        $book= \App\Book::find($id);
        $book->title=$request->get('title');
        $book->author=$request->get('author');
        $book->pages=$request->get('pages');
        $book->type=$request->get('type');
        $book->save();
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = \App\Book::find($id);
        $book->delete();
        return redirect('books')->with('success','Information has been  deleted');
    }
}
