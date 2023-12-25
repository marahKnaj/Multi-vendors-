<?php

namespace App\Http\Controllers;


use App\Models\store;
use App\Models\user;
use App\Models\subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    function __construct()
    {
     
         $this->middleware('permission:stores Mangement|create store|edit store|delete store', ['only' => ['index']]);
         $this->middleware('permission:create store', ['only' => ['create','store']]);
         $this->middleware('permission:edit store', ['only' => ['edit','update']]);
         $this->middleware('permission:delete store', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //


        $store=store::paginate(5);
                return view('backend.stores.index',compact('store'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    
       
    }
   
    public function addstores($id){
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $user=user::find($id);
        return view('backend.stores.create',['users'=>$user->id,'categories'=> $categories ,'subcategories'=>$subcategories]);
  }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     //validation
    
        //
        $store=new store();
        
    $store->name=$request->input('title');
    $store->user_id=$request->input('user');
    if($request -> hasFile('image')){
       
        $filename=time().'.'.$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('Store-images',$filename,'public');
        $store -> image =  $path ;
       
    }
    $store->status=$request->input('status');
    $store->rating=$request->input('rating');
    $store->save();
    return redirect()->route('store')->with(['add' =>' تم الاضافة بنجاح ']);
    }




    /**
     * Display the specified resource.
     */
    public function show(store $store)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $categories = Category::get();
        $subcategories = SubCategory::get();
        $edit=store::find($id);
        return view('backend.stores.edit',['st'=>$edit,'categories'=> $categories ,'subcategories'=>$subcategories]);
        //

    }


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,$id)
    {
        //
        $toUpdate=store::find($id);
        $toUpdate->name=$request->input('title');
        $toUpdate->user_id=$request->input('user_id');;
 
        
       
        $toUpdate->description=$request->input('desc');
        $toUpdate->address=$request->input('address');
        $toUpdate->category_id=$request->input('category_id');
        $toUpdate->subcategory_id=$request->input('subcategory_id');
        
       
            if($request -> hasFile('image')){
       
                $filename=time().'.'.$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('Store-images',$filename,'public');
                $toUpdate -> image =  $path ;
                $toUpdate->status=$request->input('status');
                $toUpdate->rating=$request->input('rating');
                $toUpdate->save();
                return redirect()->route('store')->with(['edit' =>' تم التعديل بنجاح ']);
            }
               
            }
        

 
    /**
     * Remove the specified resource from storage.
     */
   
    
        
       //userstore
       
        // $toUpdate->description=$request->input('desc');
        // $toUpdate->address=$request->input('address');
        // $toUpdate->category_id=$request->input('category_id');
        // $toUpdate->subcategory_id=$request->input('subcategory_id');
        // $toUpdate->status=$request->input('status');
        // $toUpdate->rating=$request->input('rating');
        // $toUpdate->save();
        // return redirect()->route('store.index')->with(['edit' =>' تم التعديل بنجاح ']); ;
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $delete=  store::find($id)->delete();
      return redirect()->route('store.index')->with(['delete' =>' تم الحذف بنجاح ']);
    }
       
public function active(Request $request ,$id){
  if($request->get('action')=='active'){
  $status=store::find($id);
  $text='active';
  $status->status=$text;
  $status->save();
}
if($request->get('action')=='inactive'){
  $status=store::find($id);
  $text='inactive';
  $status->status=$text;
  $status->save();

 

}
return redirect()->route('store.index');
}


}