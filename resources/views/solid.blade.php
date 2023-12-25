<html>
    <head>
    
 <!-- <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css"> -->

  
    <!-- Responsive CSS -->
    
   
<title> stores</title>

    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
@include('backend.layouts.head')
    @include('Backend.layouts.nav')


        

    <div class="row px-xl-5 pb-3 product">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
      <div class="card-body s4 bg-white">
        <h3 class="text-center bg-primary text-white price"> Price</h3>
        
        <span class="icon-price d-flex "> <i class="fa fa-star "> </i>
          <i class="fa fa-star  "> </i>
          <i class="fa fa-star  "> </i>
          <i class="fa fa-star  "> </i>
          <i class="fa fa-star  "> </i>
        </span>
        <p class="text-center  text-warning line"> {{$priceWithoutDiscount}}</p>
        <h5 class="text-center fs-1 text-warning">{{$price}}</h5>
      </div>
      


                               
                            </div>         </div> 
                            
                            <div class="container-fluid offer pt-5 ">
                                <div class="row px-xl-5">
                                    <div class="col-md-6 pb-4">
                                        <div class="position-relative bg-light text-center text-md-right text-white mb-2 py-5 px-5">
                                            <div class="position-relative" style="z-index: 2;">
                                            <img src="img/fashen/offer-3.png" alt="">
                                                <h5 class="text-uppercase text-dark mb-3">20% off the all order</h5>
                                                <h1 class="mb-4 font-weight-semi-bold ms-2 title-category">Big sold</h1>
                                                <a href="" class="btn btn-outline-primary py-md-2 px-md-3 btn-category">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-4">
                                        <div class="position-relative bg-light text-center text-md-left text-white mb-2 py-5 px-5">
                                            <img src="img/fashen/offer-2.png" alt="">
                                            <div class="position-relative" style="z-index: 2;">
                                                <h5 class="text-uppercase text-dark  mb-3">20% off the all order</h5>
                                                <h1 class="mb-4 font-weight-semi-bold title-category">SolD</h1>
                                                <a href="" class="btn btn-outline-primary py-md-2 px-md-3 btn-category">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>         </div>   

                                <!-- end find section -->
                    