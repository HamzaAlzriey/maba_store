<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => 'index']);
    // }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $total =0;
        $carts=Auth::user()->Products;
    // dd($carts->first()->price);
    // dd($carts->first()->pivot->count);

        foreach ($carts as $item) {
            $total += $item->price * $item->pivot->count; 
        }
       
        return view('checkout')->with('carts' , $carts )->with('total',$total);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Auth::user()->Products()->where('product_id' ,$request->product_id)->first();
        // dd($product->pivot->id);

        if ($product) {
            $w = $product->pivot->id;
 
            

             $cart = Card::find($w);
             $cart->count=++$cart->count;
             $cart->save();
 
        } else {
            $Cart= new Card();
            $Cart->product_id=$request->product_id;
            $Cart->user_id=Auth::id();
            $Cart->count=1;
            $Cart->save();
        }
  
 
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
