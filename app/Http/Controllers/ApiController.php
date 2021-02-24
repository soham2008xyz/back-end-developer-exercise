<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function checkUsername(string $username,request $request){
        $allList=User::where('username', $username)->get()->toArray();
        if(count($allList)==0){
         $jsonstr='{"exit":false}'; 
         echo $jsonstr;  
        }else{
         $jsonstr='{"exit":true}'; 
         echo $jsonstr;
        }
         
        return;
    }
    public function checkEmail(string $email,request $request){
        $allList=User::where('email', $email)->get()->toArray();
        if(count($allList)==0){
         $jsonstr='{"exit":false}'; 
         echo $jsonstr;  
        }else{
         $jsonstr='{"exit":true}'; 
         echo $jsonstr;
        }
         
        return;
    }    
}
