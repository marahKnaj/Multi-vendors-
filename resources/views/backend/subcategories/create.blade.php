@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">Add Subgategory </h4>

  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('subcategory.store')}}" method="POST"  enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="name" value="{{old('name')}}">
                                        </div>

                                        <div class="form-group">
                                            <label>category</label>
                                            <select name="category_id" class="form-control">
                                                <option selected >please choose category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>image</label>
                                            <div class="input-group">
                                                            <input class="form-control" type="file" name="image" enctype="multipart/form-data">
                                                            </div>
                        
                                        </div>
                                      
                                     
                               
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
                                </div>
@endsection
