<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=DB::table('books')->get();
        return view('Book/index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Book.add_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('/');
        $request->file('image')->move('images/product',$path);
        $data=[
            'name'=>$request->name,
            'author'=>$request->author,
            'image'=>$path,
            'gddlink'=>$request->gddlink,
        ];

        DB::table('books')->insert($data);
        return redirect()->route('book');
        
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
        $book=DB::table('books')->where('id',$id)->first();
        return view('book.edit_book',compact('book'));
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
        $path = $request->file('image')->store('/');
        $request->file('image')->move('images/product',$path);
        $data=[
            'name'=>$request->name,
            'author'=>$request->author,
            'image'=>$path,
            'gddlink'=>$request->gddlink,
        ];

        DB::table('books')->insert($data);
        return redirect()->route('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('books')->where('id',$id)->delete();
        return redirect()->route('book');
    }
}
