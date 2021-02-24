<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Blog;
use Illuminate\Support\Collection;

class FrontedController extends Controller
{
    public function home(request $request){
        $blogsAlldata=Blog::orderBy('created_at', 'asc')->paginate(8)->toArray();
        $blogsdata=$blogsAlldata['data'];
        $paginationlinks=$blogsAlldata['links'];
        
        return view("fronted.home",["blogsdata"=>$blogsdata,'links'=>$paginationlinks]);   
    }
    public function blogDetails(string $username,string $slug,string $id,request $request,){
        $blogsdata=Blog::find($id)->toArray();
        return view("fronted.blog-details",["blogsdata"=>$blogsdata]);
    }    
    //
}
