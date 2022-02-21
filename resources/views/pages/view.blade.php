@extends('layouts.admin_layout')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Student Details</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Student Details</li>
        </ol>
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            Id: <p>{{$student->id}}</p>
            Name: <p>{{$student->name}}</p>
            Email: <p>{{$student->email}}</p>
            Course: <p>{{$student->course}}</p>
            Fee: <p>{{$student->fee}}</p>
          </div>
          <div class="col-lg-3"></div>
        </div>

    </div>
</main>
@endsection
               
                