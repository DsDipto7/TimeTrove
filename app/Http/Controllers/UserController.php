<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Watch;
use App\Models\Contactt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //


    //aita niya  kaj 
    public function dashboard(){
        return view('dashboard.user.user_dashboard');
    }

    public function add_to_cart($id)
    {
        $data['getWatch'] = Watch::find($id);
        return view('dashboard.user.add_to_cart', $data);
    }

    public function post_add_to_cart($id, Request $request)
    {
        if ($request->quantity > 0) {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
            $cart->quantity = $request->quantity;
            $cart->watch_id = $id;
            $cart->total = Watch::find($id)->price * $request->quantity;
            $cart->save();

            return redirect('/_user/add_to_cart/' . $id)->with('success', 'Added to cart');
        }else{
            return redirect('/_user/add_to_cart/' . $id)->with('error', 'Atleast One item should be added');
        }
    }

    public function cart_list(){
        $data['getMyCart'] = Cart::where('user_id', Auth::user()->id)->get();
        $data['getWatch'] = Watch::all();
        $data['total_amount']=0;
        foreach($data['getMyCart'] as $cart){
            $data['total_amount']+= $cart->total;
        }
        return view('dashboard.user.cart_list',$data);
    }

    public function edit_cart($id){
        $data['getCart'] = Cart::find($id);
        $data['getWatch'] = Watch::find($data['getCart']->watch_id);
        return view('dashboard.user.edit_cart',$data);
    }

    public function post_edit_cart($id, Request $request){
        if ($request->quantity > 0) {
            $cart = Cart::find($id);
            $cart->quantity = $request->quantity;
            $cart->total = Watch::find($cart->watch_id)->price * $request->quantity;
            $cart->save();

            return redirect('/_user/cart_list')->with('success', 'Edited');
        } else {
            return redirect('/_user/cart_list')->with('error', 'Atleast One item should be added');
        }
    }

    public function delete_cart($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/_user/cart_list')->with('success', 'Deleted');
    }

    public function invoice(){
        $data['getInvoice']  = Order::where('user_id',Auth::user()->id)->get();
        return view('dashboard.user.invoice',$data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contactt::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
