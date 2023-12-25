<?php

namespace App\Http\Controllers;
use Darryldecode\Cart\CartCondition;
use Cart;
use Darryldecode\Cart\CartCollection;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;

class CartController extends Controller
{

    public function create()
    {//put order in db
        if(auth()->check()){
            auth()->user()->orders()->create([ 
    'cart'=>serialize(session()->get('cart'))
            ]);
           return redirect()->route('order.index');
        
          }
          else{
            return redirect()->route('login');
          }
        }

    public function cartList()
    {
        $cartItems = \Cart::getContent();
        $orders = Order::all();
        return view('cart', compact('cartItems','orders'));
    }
    public function addToCart(Request $request)
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

      
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('cart.list');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
    //   session()->flash('danger', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.list')->with('danger','Item Cart is Updated Successfully ! !');
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
      //  session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.list')->with('danger','Item Cart Remove Successfully !');

    }
    public function clearAllCart()
    {
        \Cart::clear();
       // session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.list') ->with('success','All Item Cart Clear Successfully !');
    }

    public function applyDiscount($productId, $discountValue)
{
    $userId = auth()->user()->id;
    $product = Product::find($productId);
    $cartItem = \Cart::session($userId)->get($productId);
    $cartItem = new \Darryldecode\Cart\CartCondition([
        'name' => 'Discount',
        'type' => 'discount',
        'value' => '+'.$discountValue.'%',
        'target' => 'subtotal',
    ]);
    $discountAmount = $product->price * ($discountValue/100);
    
   
    return view('solid', ['priceWithoutDiscount' => $discountAmount,'price'=>$product->price]);
}



}
