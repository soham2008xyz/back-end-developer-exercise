@extends('layouts.master-nonav')

@section('title', 'Admin signup')

@section('content')
<div class="container">
    <div class="col-12 col-sm-6 col-md-5 p-3 col-centered shadow rounded" style="margin-top: 100px;"> 
    <h4 class="text-center"> Admin Signup</h4>
        <form class="form row col-11 col-centered" action="add-users" method="post">
        @csrf
            <input type="text" name="name" class="form-control col-12 mt-2" placeholder="Name" required>
            <input type="email" id="email" name="email" class="form-control col-12 mt-2" placeholder="Email Address" required>
            <p style="font-size:11px;" class="p-0 m-0" id="emailExit"></p>
            <input type="password" name="password" class="form-control col-12 mt-2" placeholder="PassWord" required>
            <input type="text" id="username" name="username" class="form-control col-12 mt-2" placeholder="User Name" required>
            <input type="submit" id="submitbtn" class="col-12 btn mt-2 " name="" style="background: black;color: white;" value="Sign Up" >
            <p style="font-size:11px;" id="usernameExit"></p>
        </form>
        <p class="text-center">Already Have Account? <a href="/admin/login">Login </a></p>
    </div>
</div>
       
@endsection
@push('scripts')
<script>
    document.getElementById("username").addEventListener('input',function(e){
        var value=e.srcElement.value;
        var usernameExit=document.getElementById("usernameExit");
        if(value!==""){
        usernameExit.innerHTML="loding.." ;
        usernameExit.style.color="black"; 
        document.getElementById("submitbtn").disabled=true;  
        httpCallGet('http://localhost:8000/api/check-username/'+value).then(res=>{
        console.log(res);
        if(res.exit){
        usernameExit.innerHTML="username already exit" ; 
        usernameExit.style.color="red";
        document.getElementById("submitbtn").disabled=true; 
        }else{
        usernameExit.innerHTML="username availble" ; 
        usernameExit.style.color="green";
        document.getElementById("submitbtn").disabled=false;             
        }
    });
}
});
document.getElementById("email").addEventListener('input',function(e){
        var valueEmail=e.srcElement.value;
        varemailExit=document.getElementById("emailExit");
        if(valueEmail!==""){
            emailExit.innerHTML="loding.." ;
            emailExit.style.color="black"; 
        document.getElementById("submitbtn").disabled=true;  
        httpCallGet('http://localhost:8000/api/check-email/'+valueEmail).then(res=>{
        console.log(res);
        if(res.exit){
            emailExit.innerHTML="email already exit" ; 
            emailExit.style.color="red";
        
        }else{
            emailExit.innerHTML="You can use this mail" ; 
            emailExit.style.color="green";
                     
        }
    });
}
});

</script>
@endpush