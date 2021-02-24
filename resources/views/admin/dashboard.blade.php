@extends('layouts.master')

@section('title', 'Dashboard')

@section('sidebar')
    @parent

    
@endsection

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                    <a style="float:right; margin-bottom:5px;" class="btn btn-primary" href="/admin/add-blog" >
                    Add Blog
                    </a>
                </div>
                <div class="panel-body ">
                <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($blogsdata as $item)	
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['author']}}</td>
                            <td>
                                <a href="edit-blog/{{$item['id']}}" class="btn btn-primary">Edit</a>
                                <a href="delete-blog/{{$item['id']}}"  class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                        @endforeach	
                        </tbody>
                    </table>
                </div>
            </div>
        
		
       
@endsection