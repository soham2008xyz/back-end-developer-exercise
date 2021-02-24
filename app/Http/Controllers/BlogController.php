<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Blog;
use Illuminate\Support\Collection;

class BlogController extends Controller
{
    
   public function handleaddBlog(request $request){
    $userinfo=$request->session()->get('loginfo');
    $author=$userinfo["name"];
    $slug=$userinfo["username"]."/".str_replace(" ","_",$request->title);
    $username=$userinfo["username"];  
    $addblog=new Blog;
    $addblog->title=$request->title;
    $addblog->imgpath=$request->imgpath;
    $addblog->slug=$slug;
    $addblog->postcontent=$request->postcontent;
    $addblog->author=$author;
    $addblog->authorusername=$username;
    $addblog->status='y';
    $addblog->save();
    return redirect('/admin/dashboard');
   }
  public function addBlog(request $request){
  return view("admin.addblog");
  }
  public function editBlog(string $lang,request $request, string $id){
    $blogsdata=Blog::find($id)->toArray();
    return view("admin.editblog",["blogsdata"=>$blogsdata]);
  }
  public function handleditBlog(string $lang,request $request, string $id){
    $userinfo=$request->session()->get('loginfo');
    $author=$userinfo["name"];
    $slug=$userinfo["username"]."/".str_replace(" ","_",$request->title);
    $username=$userinfo["username"];  
    $addblog=Blog::find($id);
    $addblog->title=$request->title;
    $addblog->imgpath=$request->imgpath;
    $addblog->slug=$slug;
    $addblog->postcontent=$request->postcontent;
    $addblog->author=$author;
    $addblog->authorusername=$username;
    $addblog->status='y';
    $addblog->save();
    return redirect('/admin/dashboard');
   }
   public function deleteBlog(string $lang,request $request, string $id){
    $blogsdata=Blog::find($id);
    $blogsdata->delete();
    return redirect('/admin/dashboard');
  }         
}
