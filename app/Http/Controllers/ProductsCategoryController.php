<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\store;
use Illuminate\Http\Request;

class ProductsCategoryController extends Controller
{
    
    function __construct()
    {
     
        $this->middleware('permission:ProductCategory Mangement|create ProductCategory|Edit ProductCategory|delete ProductCategory|show ProductCategory', ['only' => ['index']]);
         $this->middleware('permission:create ProductCategory', ['only' => ['create','store']]);
         $this->middleware('permission:Edit ProductCategory', ['only' => ['edit','update']]);
         $this->middleware('permission:delete ProductCategory', ['only' => ['destroy']]);
    }
    public function index()
    {
        $productCategory=ProductCategory::paginate(3);
        return view('backend.productCategory.index',compact('productCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { $store =store::get();
     return view('backend.productCategory.create',compact('store'));
    }

    public function productCategory($id){
        $store = store::find($id);
        $productcat = ProductCategory::where('storeId',$id)->get();
        return view('template1.productCategory',compact('productcat'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productcat = new ProductCategory();
        $productcat->name = $request->input('name');
        $productcat->storeId = $request->input('storeId');
        $productcat->status = $request->input('status');
        if ($request->hasFile('photo')) {
            $filename = time() . '.' . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('productcat', $filename, 'public');
            $productcat->photo = $path;
        }
        // $input = $request->all();
        // $productCategory=ProductCategory::create($input);
        $productcat->save();
        return redirect()->route('ProductCat.index')
                                       ->with('success','category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productCategory=ProductCategory::find($id);
        return view('backend.productCategory.show',compact('productCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { $productCategory=ProductCategory::find($id);
        $store=store::get();
        return view('backend.productCategory.edit',compact('productCategory','store'));
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { $input = $request->all();
        $productCategory = ProductCategory::find($id);
        $productCategory->update($input);
        return redirect()->route('ProductCat.index')
            ->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { ProductCategory::find($id)->delete();
        return redirect()->route('ProductCat.index')
                         ->with('success','category deleted successfully');
        
    }
}
