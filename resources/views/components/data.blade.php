@extends('welcome')
@section('title','Display Table')

@section('contents')

@php
    $employees=$employee->toArray();
@endphp

</pre>
<h2 class="m-4">Employee Details</h2>

    <table class="table table-hover m-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td scope="row">{{$employee['name']}}</td>
                <td>{{$employee['email']}}</td>
                <td>{{$employee['contact']}}</td>
                <td>{{$employee['password']}}</td>
                <td>
                    <a href="{{ url('/delete', [$employee['id']]) }}">
                        <button class=" btn btn-danger">Delete</button>
                    </a>
                    <a href="{{ url('/edit', [$employee['id']]) }}">
                    <button class=" btn btn-primary">Edit</button>
                </a>
                </td>
            </tr>
            @endforeach
            
           
        </tbody>
    </table>
@endsection
    