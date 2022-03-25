<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


use App\User;
use App\Chapter;
use App\OrderUser;

class OrderCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function cart()
     {
         return view('learning.cart');
     }

     public function add( $id)
     {

                
        $chapter = Chapter::find($id);
        if(!$chapter) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        'id' => $chapter -> id,
                        'chapter' => $chapter -> chapter,
                         'name' => $chapter -> name,
                        'subject' => $chapter -> subjects -> subject,
                         'price' => 1900,
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        // if(isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        //     session()->put('cart', $cart);
        //     return redirect()->back()->with('success', 'Product added to cart successfully!');
        // }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
             'id' => $chapter -> id,
          'chapter' => $chapter -> chapter,
                         'name' => $chapter -> name,
                        'subject' => $chapter -> subjects -> subject,
                         'price' => 1900,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

       public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        return redirect()->route('cart');
    }




      
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
    public function store(Request $request )
    {
                $chapter = session()->get('cart');
            foreach ($chapter as $chapters) {
                $chapters = $chapter['id'];
            }

            $new = new OrderUser();
            $new->user_id =$request ->  user()->id;
            $new->chapter_id = $chapters ;
            $new->approve = 1;
            $new->total = 1;
            $new->save();

            Session::forget('cart');
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapter::remove($id);

        return redirect() -> back();
    }
}
