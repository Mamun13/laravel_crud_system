@extends('layouts.admin_layout')
@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
          <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form action="{{route('student.dashboard.store')}}" method="POST">
                  {{-- @if(session::has('msg'))
                    <p class="alart alart-success">{{session::get('msg')}}</p>
                  @endif --}}
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=" First Name">
                        @error('name')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>

                    <div class="form-group mt-3">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                      @error('email')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                      <label for="course">Course</label>
                      <select class="form-control" id="course" name="course">
                        <option>Bangla</option>
                        <option>English</option>
                        <option>Physics</option>
                        <option>Chemistry</option>
                        <option>Mathematics</option>
                        <option>Biology</option>
                        <option>ICT</option>
                      </select>
                      @error('course')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                    </div>

                    <div class="form-group mt-3">
                      <label for="fee">Fee</label>
                      <input type="text" class="form-control" id="fee" name="fee" placeholder="">
                      @error('fee')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group mt-3 mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        @error('password')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</main>
@endsection
               
                