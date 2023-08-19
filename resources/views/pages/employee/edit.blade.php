@extends('layouts.masters')

@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">
            <h2>Edit Employee</h2>
        </div>
        <div class="card-body">
          <form action="{{url('/employee/update')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$employee->id}}">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input name="name" type="text" class="form-control" value="{{$employee->name}}">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="text" class="form-control" value="{{$employee->email}}">
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input name="phone" type="text" class="form-control" value="{{$employee->phone}}">
            </div>

            <div class="mb-3">
              <label for="address" class="form-label">Address</label>
              <textarea name="address" rows="2" class="form-control">{{$employee->address}}</textarea>
            </div>

            <button type="submit" class="btn btn-info">Update </button>
          </form>
        </div>
    </div>
</div>

@endsection