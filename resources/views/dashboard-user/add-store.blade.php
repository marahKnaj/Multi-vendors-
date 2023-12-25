<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>SB Admin 2 - add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Custom fonts for this template-->
    

</head>
 <body class="bg-light">
<h4 class="m-0 font-weight-bold text-primary text-center">Add store </h4>

<div class="panel-body px-5 container-fluid setting d-flex justify-content-center">
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="" method="POST"  enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name STORE</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="title" >
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>user</label>
                                          <input type="TEXT" class="form-control"  placeholder="user" name="user" >
                                         
                                                            </div>

                                        <div class="form-group">
                                            <label>image</label>
                                            <div class="input-group">
                                          <input class="form-control" type="file" name="image">
                                         

                                                        </div>
                               <!-- <img id="holder" style="margin-top:15px;max-height:100px;"> -->
                                        </div>
                                        <div class="form-group">
                                            <label>rating</label>
                                            <select class="form-control" name="rating">
                                                <option value="rating">--rating--</option>
                                                <option value="1" {{old('condition')=='1' ? 'selected' : '' }}>1</option>
                                                <option value="2" {{old('condition')=='2' ? 'selected' : '' }}>2</option>
                                                <option value="3" {{old('condition')=='3' ? 'selected' : '' }}>3</option>
                                                <option value="4" {{old('condition')=='4' ? 'selected' : '' }}>4</option>
                                                <option value="5" {{old('condition')=='4' ? 'selected' : '' }}>5</option>
                                            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control" name="status">
                                                <option value="">--status--</option>
                                                <option value="active" {{old('status')=='active' ? 'selected' : '' }}>active</option>
                                                <option value="inactive" {{old('status')=='inactive' ? 'selected' : '' }}>inactive</option>
                                            
                                            </select>
                                        </div>
                               
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
