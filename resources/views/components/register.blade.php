@extends('welcome')

@section('title','Registration form')



@section('contents')
<form class="m-4 p-4" action="{{ url('/store') }}" method="POST">
    @csrf
<legend>Registration Form</legend>

<x-input name="name" placeholder="Enter Your name" label="Enter Your Name" />
<x-input name="email" placeholder="Enter Your Email" label="Email" />
<x-input name="contact" placeholder="Enter Your Contact" label="Contact" />
<x-input name="password" placeholder="Enter Your Password" label="Password" />
<x-input name="confirmpassword" placeholder="Confirm Your password" label="Confirm Password" />
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection