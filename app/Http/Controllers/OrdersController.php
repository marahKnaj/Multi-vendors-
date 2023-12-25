<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cartItems = \Cart::getContent();
        $orders = Order::all();
        return view('orders.index', compact('cartItems','orders'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'photo' => $request->photo,
                )
            ]);
    
            $order = Order::where('name', $request->name)->first();

            if ($order) {
            
                $order->quantity = \Cart::get($request->id)['quantity'];                                            
                $order->save();
            } else {
           
                $order = new Order;
                $order->name = $request->name;
                $order->price = $request->price;
                $order->quantity = $request->quantity;
                $order->save();
            }
        
            session()->flash('success', 'Product is Added to Cart Successfully!');
            return redirect()->route('order.index');
        }
     
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
{
    $order->delete(); 
    
    return redirect()->route('order.index'); 
}
}