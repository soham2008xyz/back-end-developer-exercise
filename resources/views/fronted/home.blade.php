@extends('layouts.master-front')
@section('title', 'Home Page')
@section('stylesheets')
<link href="css/app.css" rel="stylesheet"></link>
@endsection
@section('content')
<div class="container-fluid">
<nav class="navbar navbar-expand-md col-12 py-2 fixed-top nav-black" >
  <h4  style="text-align: center;font-style:italic;padding-top: 2px;cursor: pointer;"><i style="font-size:17px">Blog</i>
  <b style="font-family: 'Courier New', Courier, monospace;">render</b></h4>
</nav>
<main class="col-12" style="height:1000px;margin-top:100px;">
   <h4 class="text-center">
    Welcome to BlogRender
    </h4>
    <div class="col-12">
	     <div class="col-12 row  mt-5 ">
	     	<!-- part of blog div start -->
             @foreach($blogsdata as $item)
		     <div class="col-12 p-2 col-sm-4">
			     <div class="col-10 p-4 col-centered shadow">
			       <h5>{{$item['title']}}</h5>
			         <p style="color: blue;font-size:13px;">Author: {{$item['author']}} <br> Last Updated: {{date("d/m/Y", strtotime($item['updated_at']))}}</p>
			           <p>{{substr($item['postcontent'],0,100)}}..</p>
                    <div class="col-centered">
                      <a href="blog-details/{{$item['slug']}}/{{$item['id']}}" class="btn btn-sm btn-primary">Read More</a>
                    </div> 
			     </div>	
		    </div>
            @endforeach
		    <!-- part of blog div end -->
	     </div>	
          <div class="row">
            <div class="p-3 row col-centered">
                  @foreach($links as $link)
                    @if($link['url']!==null)
                      <div class="col-2 shadow-sm mt-2 p-2">
                      <a href="{{$link['url']}}" style="color:{{($link['active']==true)? 'black':'blue'}}">Page {!!$link['label']!!}</a>
                      </div>
                    @endif
                  @endforeach
            </div>
          <div>
    </div>
</main>
</div>
       
@endsection
