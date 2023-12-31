@extends('layouts.masters')


@section('content')

    <div class="row">
        <div class="card">
            <div class="card-header">
                <h2>Employee List</h2>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr class="">
                                    <td>{{$employee->id}}</td>
                                    <td scope="row">{{$employee->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>

                                        <a href="{{url('employee/edit/'.$employee->id)}}" class="btn btn-info">Edit</a>
                                        
                                        <a href="{{url('employee/delete/'.$employee->id)}}" class="btn btn-danger" onclick="deleteItem(this)">Delete</a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $employees->links() !!}
                </div>
            </div>
        </div>
    </div>
    
@endsection