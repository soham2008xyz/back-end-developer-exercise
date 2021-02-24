<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function getDashboard(request $request){
      $allblogs=Blog::all()->toArray();
      //dd($allblogs);
      if (Auth::check()) {
        return view('admin.dashboard',["blogsdata"=>$allblogs]);
      }
      
        
    }
    public function addAdminUser(request $request){
      
      $adminUser=new User;
      $adminUser->name=$request->name;
      $adminUser->email=$request->email;
      $adminUser->user_type='admin';
      $adminUser->username=$request->username;
      $adminUser->password=Hash::make($request->password);
      $adminUser->status='y';
      $adminUser->save();
     return redirect('/admin/login');
     
    }
   public function adminSignup(){
    if (Auth::check()) {
      return redirect()->intended('/admin/dashboard');
    }
     return view('admin.signup');
   }
   public function adminLogin(request $request){
    if (Auth::check()) {
      return redirect()->intended('/admin/dashboard');
    }     
    return view('admin.login');
  }
   public function adminLogout(request $request){
    $request->session()->flush(); 
    return redirect()->intended('/admin/login');
  }
   public function handleLogin(Request $request)
  {   
      $credentials = $request->only('email', 'password');
      if (Auth::attempt($credentials)) {
        $allusers=User::where('email', $request->email)->get()->toArray();
        $allusers=$allusers[0];
          $request->session()->put(["loginfo"=>$allusers]);
          return redirect()->intended('/admin/dashboard');
      }
        return back()->withErrors([
          'error' => 'The provided credentials do not match our records.',
      ]);
  }  
    //
}
