@extends('layouts.admin_layout')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Student list</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Student list</li>
        </ol>
        <div class="row">
          <div class="col-lg-12">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Course</th>
                  <th scope="col">Fee</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @if (count($students) > 0)
                  @foreach ($students as $student)
                  <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->course}}</td>
                    <td>{{$student->fee}}</td>
                    <td class="mr-0">
                      <button class="btn btn-primary">View</button>
                      <button class="btn btn-success">Update</button>
                      <button class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  @endforeach                    
                @endif
                
              </tbody>
            </table>
            <a href="{{route('admin.dashboard')}}" class="btn btn-primary">Add User</a>
          </div>
        </div>
    </div>
</main>
@endsection
               
                