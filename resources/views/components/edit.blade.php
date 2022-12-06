@extends('welcome')
@section('title','Edit Details')
 @section('contents')
 @php
    $employees=$employee->toArray()
 @endphp  

<form action="{{ url('/editstore') }}" class="form m-4" method="POST">
    <legend>Edit Details</legend>
    @csrf
    <input type="hidden" name="id" value="{{$employees['id']}}">
    <div class="form-group">
      <label for="">Name</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" value="{{$employees['name']}}">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" value="{{$employees['email']}}">
      </div>
      <div class="form-group">
        <label for="">Contact</label>
        <input type="text" class="form-control" name="contact" id="" aria-describedby="helpId" value="{{$employees['contact']}}">
      </div>
      <button type="submit" class="btn btn-primary m-3">Submit</button>
</form>




 @endsection