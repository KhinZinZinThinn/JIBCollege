<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jnews;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getWelcome(){
        $jnews=Jnews::OrderBy('id','desc')->get();
        return view('welcome')->with(['jnews'=>$jnews]);
    }

    public function getPostImage($img_name){
        $file=Storage::disk('image')->get($img_name);
        return response($file, 200);
    }

}
