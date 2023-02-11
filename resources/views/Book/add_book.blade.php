@extends('layouts.app')
@section('mainpart')
<div class="card my-4 px-0 container">

<div class="card-header">
    <h3>Add By Admin</h3>
</div>

<div class="card-body">

    <form action={{route('book.store')}}  method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Book Name</label>
            <input class="form-control" type="text" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Book Author</label>
            <input class="form-control" type="text" name="author">
        </div>
        <div class="mb-3">
            <label class="form-label">Book Image</label>
            <input class="form-control" type="file" name="image">
        </div>
        <div class="mb-3">
            <label class="form-label">Google Drive Link</label>
            <input class="form-control" type="text" name="gddlink">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Add Book</button>
    </form>

</div>
</div>
@endsection