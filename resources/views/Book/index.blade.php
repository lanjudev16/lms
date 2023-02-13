@extends('layouts.app')

@section('mainpart')
<div class="card my-4 px-0 container">

<div class="card-header">
    <h3>Books </h3>
</div>

<div class="card-body table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>SL</th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Book Image</th>
                <th>Google Drive link</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>

        
        @foreach($books as $key=> $book)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->author}}</td>
                <td class='customImageStyle'><img src={{asset('images/product/'.$book->image)}} alt="" srcset=""></td>
                <td width="20px">{{$book->gddlink}}</td>
                <td>
                    <a href={{route('book.edit',$book->id)}} class="btn btn-primary btn-sm">Edit</a>
                    <a href={{route('book.delete',$book->id)}} class="btn btn-danger btn-sm">Delete</a >
                </td>

            </tr>
        @endforeach
           
        </tbody>
    </table>
</div>
</div>
@endsection