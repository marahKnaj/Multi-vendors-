<?php

namespace App\Http\Controllers;
use Darryldecode\Cart\ItemCollectio\setCondition;
use App\Models\Product;
use App\Models\store;
use Cart;
use \Darryldecode\Cart\CartCondition;

use  Darryldecode\Cart\Facades\CartFacade;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(3);
        return view('backend.products.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productcat = ProductCategory::get();
        return view('backend.products.create', compact('productcat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->quantity = $request->input('quantity');
        $product->ProductCategoryId = $request->input('ProductCategoryId');
        $product->status = $request->input('status');
        $product->description = $request->input('description');
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('products', $filename, 'public');
            $product->photo = $path;
        }
        $product->price = $request->input('price');

        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        return view('backend.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $productcat = ProductCategory::get();
        return view('backend.products.edit', compact('product', 'productcat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->ProductCategoryId = $request->input('ProductCategoryId');
        $product->status = $request->input('status');
        $product->description = $request->input('description');
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('products', $filename, 'public');
            $product->photo = $path;
        }
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
    public function Offer($id)
    {
        $product = Product::find($id);
      
        return view('backend.products.addOffer', compact('product'));
    }
    public function addOffer(Request $request,  $id)
    {
        $product = Product::findOrFail($id);
        $product->discount = $request->input('discount');
        $product->Expdate = $request->input('Expdate');
        $product->hasoffer = 1;
        
       $product->save();
        return redirect()->route('product.index');
    }



    public function productStore($id)
    
{



//     $store = Store::where('id',$id)->first();
// $productcat = ProductCategory::find($id);

// $product = product::where('ProductCategoryId',$productcat->id)->get();

// if ($store->template == 'template1') {

// return view('template1.product',compact('product'));}

// if ($store->template == 'template2') {

//     return view('template2.product',compact('product'));}

//  if ($store->template == 'template3') {

//      return view('template3.product',compact('product'));}



// }

$store = store::find($id);

// $store = Store::where('id',$id)->first();
$productcat = ProductCategory::where('storeId',$id)->get();
foreach($productcat as $product){
  $product = product::where('ProductCategoryId',$product->id)->get();

if ($store->template == 'template1') {

    return view('template1.product',compact('product'));}
    
    if ($store->template == 'template2') {
    
        return view('template2.product',compact('product'));}
    
     if ($store->template == 'template3') {
    
         return view('template3.product',compact('product'));}
     }
    
    
    
    

}
}

//$current_timestamp = Carbon::now()->timestamp;
//$current_date_time = Carbon::now()->toDateTimeString(); // Produces something like "2019-03-11 12:25:00"

