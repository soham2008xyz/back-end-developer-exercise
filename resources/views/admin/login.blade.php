@extends('layouts.master-nonav')

@section('title', 'Admin Login')

@section('content')
<div class="container">
    <div class="col-12 col-sm-6 col-md-5 p-3 col-centered shadow rounded" style="margin-top: 100px;"> 
    <h4 class="text-center"> Admin Login</h4>
    @error('error')
    <p class="text-center" style="color:red;font-size:15px;">{{ $message }}</p>
   @enderror
    <h6>
        <form class="form row col-11 col-centered" action="login-handle" method="post">
        @csrf
            
            <input type="email" name="email" class="form-control col-12 mt-2" placeholder="Email Address" required>
            <input type="password" name="password" class="form-control col-12 mt-2" placeholder="PassWord" required>
            <input type="submit" class="col-12 btn mt-2 " name="" style="background: black;color: white;" value="login" >
        </form>
        <p class="text-center">Not Have Account? <a href="/admin/signup">Create One</a></p>
    </div>
</div>
       
@endsection