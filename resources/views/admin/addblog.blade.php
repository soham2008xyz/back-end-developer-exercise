@extends('layouts.master')

@section('title', 'Dashboard')

@section('sidebar')
    @parent

    
@endsection

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Blog
                </div>
                <div class="panel-body ">
                <form method="post" action="addblog-handle" >
                @csrf
                <table class="table">
                	<tbody>
                		<tr>
                		  <input type="text" class="form-control" name="title" placeholder="Add Blog Title"><br>	
                		</tr>
                		<tr>
                			<textarea type="text" name="postcontent" class="form-control" rows="15" name="title" placeholder="Add Blog Content"></textarea>
                		</tr>
                        <br>
                		<tr>
                			<input style="float:right;" class="btn btn-primary" type="submit" name="publish" value="Publish">
                		</tr>
                	</tbody>
                </table>
                </form>
                
                </div>
            </div>             
@endsection