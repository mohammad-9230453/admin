<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Post;
use App\Cartable;
use App\Postable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.box');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }





    public function addToCart(Request $request, Post $post)
    {
        $posts = Post::all();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($post);
        $request->session()->put('cart', $cart);

        if (0 && Auth::check()){


//            if (Auth::user()->cart()){
//                Auth::user()->cart()->update(['totalPrice'=>$cart->totalPrice , 'totalQty' => $cart->totalQty  , 'cart_type' => 1]);
//            }else{
//                Auth::user()->cart()->create(['totalPrice'=>$cart->totalPrice , 'totalQty' => $cart->totalQty  , 'cart_type' => 1]);
//            }
            $cartable = Auth::user()->cart()->updateOrCreate(['totalPrice'=>$cart->totalPrice , 'totalQty' => $cart->totalQty  , 'cart_type' => 1]);


//            $cartable =Cartable::where('user_id' , Auth::user()->id)->get();
            $item = $cart->items[$post->id];

//                if ($newitem = $cartable->items()->where('post_id' , $post->id)->get()){
//                    $newitem->update(['price' => $item->price , 'qty' => $item->qty]);
//                }else{
          $postable =  $post->postable()->UpdateOrCreate(['price' => $item['price'] , 'qty' => $item['qty'] ]);
            $postable->cart()->attach($cartable->id);
//                }

        }

//        return redirect()->route('cart.index');
        return view('cart.posts', compact('posts'));
    }






    public function deleteFromCart(Request $request, $cartId)
    {
        if ($oldCart = Session::get('cart')) {
           $cart = new Cart($oldCart);
           $cart->delete($cartId);
           if($cart->totalQty != 0){
               $request->session()->put('cart' , $cart);
           }else{
               $request->session()->forget('cart');
           }
            return redirect()->route('cart.index');

        }
            }







            public function forgetFromCart(Request $request, $cartId)
    {
        if ($oldCart = Session::get('cart')) {
           $cart = new Cart($oldCart);
           $cart->forget($cartId);
           if(Session::get('cart')->totalQty != 0){
               $request->session()->put('cart' , $cart);
           }else{
               $request->session()->forget('cart');
           }
            return redirect()->route('cart.index');

        }
            }






            public function numberFromCart(Request $request, $cartId)
    {
        if ($oldCart = Session::get('cart')) {
           $cart = new Cart($oldCart);
           $cart->number($cartId , $request->number);
           if(Session::get('cart')->totalQty != 0){
               $request->session()->put('cart' , $cart);
           }else{
               $request->session()->forget('cart');
           }
            return redirect()->route('cart.index');

        }
            }



}

