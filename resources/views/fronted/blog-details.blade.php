@extends('layouts.master-front')

@section('title', $blogsdata['title'])
@section('stylesheets')
<link href="../../../../css/app.css" rel="stylesheet"></link>
@endsection
@section('content')
<div class="container-fluid">
<nav class="navbar navbar-expand-md col-12 py-2 fixed-top nav-black" >
  <h4  style="text-align: center;font-style:italic;padding-top: 2px;cursor: pointer;"><i style="font-size:17px">Blog</i>
  <b style="font-family: 'Courier New', Courier, monospace;">render</b></h4>
</nav>
<main class="col-12 col-centered" style="height:1000px;margin-top:100px;">
   <h4 class="text-center" style="text-decoration:underline;">
    {{$blogsdata['title']}}
    </h4>
    <div class="col-12 col-centered">
	     <div class="col-10 col-centered mt-5 ">
	     	<!-- part of blog div start -->
             
		     <div class="col-12 col-centered p-2">
			     <div class="col-10 p-4 col-centered shadow">
			       <h5>{{$blogsdata['title']}}</h5>
			         <p style="color: blue;font-size:13px;">Author: {{$blogsdata['author']}} <br> Last Updated: {{date("d/m/Y", strtotime($blogsdata['updated_at']))}}</p>
			           <p style="font-size:15px;font-style:italic;">{{$blogsdata['postcontent']}}</p>
                    <div class="col-3 col-centered">
                      <a href="/" class="btn btn-sm btn-primary">HOME</a>
                    </div> 
			     </div>	
		    </div>
		    <!-- part of blog div end -->
	     </div>	
    </div>
</main>
</div>
       
@endsection