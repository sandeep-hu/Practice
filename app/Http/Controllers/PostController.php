<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends Controller
{
	
	public function index($id){
    return "control its working".$id;
	}
	
	public function show($id){
    return "Show is its working".$id;
	}
	
   public function contact(){
   // return view('contact')->with('id',$id);
   $peoples=['Gagan','kasthuri','varsha','kishore'];
   return view('contact',compact('peoples'));
	}
}
