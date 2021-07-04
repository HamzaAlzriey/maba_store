<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('products')->with('product' , Product::get());
    }

    public function showProduct($id){
        return view('product')->with('product' , Product::get());
    }

    public function search (Request $request){
        $name = $request->name;
        $data=Product::where('name','LIKE', '%'.$name.'%')->get();
        return view('_product')->with('product' ,  $data);
    }
}
