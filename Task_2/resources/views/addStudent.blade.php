<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
@extends('layout')
@section('content')
<form action="/registration" method="post">
{{csrf_field()}}
        
  <div class="form-group" >
    <label for="s_name">Name:</label>
    <input type="text" class="form-control" id="s_name" name='s_name' value="{{old('s_name')}}" placeholder="Enter Name:">
    @error('s_name')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="s_email">Email:</label>
    <input type="email" class="form-control" id="s_email" name='s_email' placeholder="Enter Email">
    @error('s_email')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="s_password">Password</label>
    <input type="password" class="form-control" id="s_password" name="s_password" placeholder="Password">
    @error('s_password')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="s_cgpa">CGPA:</label>
    <input type="number" class="form-control" id="s_cgpa" name='s_cgpa' placeholder="Enter Cgpa">
    @error('s_cgpa')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
  <div class="form-group">
    <label for="s_department">Department:</label>
    <input type="text" class="form-control" id="s_department" name='s_department' placeholder="Enter Department">
    @error('s_department')
                <span class="text-danger">{{$message}}</span>
     @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
</body>
</html>