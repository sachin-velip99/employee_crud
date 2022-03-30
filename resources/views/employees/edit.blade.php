@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="position" id="position" value="{{$employees->position}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="number" name="salary" id="salary" value="{{$employees->salary}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop