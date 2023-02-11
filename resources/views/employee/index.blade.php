@extends('layouts.app')

@section('mainpart')
<div class="card my-4 px-0 container">

<div class="card-header">
    <h3>All Books Here</h3>
</div>

<div class="card-body table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>


        @foreach($employees as $key=> $employee)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->designation}}</td>
                <td>${{$employee->seller}}</td>
                <td>
                    <a href={{route('employee.edit',$employee->id) }} class="btn btn-primary btn-sm">Edit</a>
                    <a href={{route('employee.delete',$employee->id)}} class="btn btn-danger btn-sm">Delete</a >
                </td>
            </tr>
        @endforeach
           
        </tbody>
    </table>
</div>
</div>
@endsection