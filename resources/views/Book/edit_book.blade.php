@extends('layouts.app')
@section('mainpart')
<div class="card my-4 px-0 container">

<div class="card-header">
    <h3>Add By Admin</h3>
</div>

<div class="card-body">

    <form action={{route('book.update',$book->id)}}  method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Book Name</label>
            <input class="form-control" type="text" name="name" value={{$book->name}}>
        </div>
        <div class="mb-3">
            <label class="form-label">Author Name</label>
            <input class="form-control" type="text" name="author" value={{$book->author}}>
        </div>
        <div class="mb-3">
            <label class="form-label">Book Image</label>
            <input class="form-control" type="file" name="image" >
        </div>
        <div class="mb-3">
            <label class="form-label">Google Drive Link</label>
            <input class="form-control" type="text" name="gddlink" value={{$book->gddlink}}>
        </div>
        <div class="form-check  mb-3">
            <input class="form-check-input" type="checkbox" value=1 name="status">
            <label class="form-check-label" for=""> Default checkbox </label>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Update Book</button>
    </form>

</div>
</div>
@endsection