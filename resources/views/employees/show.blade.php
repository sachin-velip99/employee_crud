@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <p class="card-text">Position : {{ $employees->position }}</p>
        <p class="card-text">Salary : {{ $employees->salary }}</p>
  </div>
      
    </hr>
  
  </div>
</div>