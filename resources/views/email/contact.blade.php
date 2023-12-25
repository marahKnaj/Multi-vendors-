<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('assets/css/secondary.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

</head>
<div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end text-center">
        <div class="col-lg-7 mx-auto">
          <h1>Contact</h1>  
          <p class="mb-4"> <strong>Contact Us</strong></p>        
        </div>
      </div>
    </div>
  </div>
  <div class="untree_co-section">
    <div class="container">


      <div class="row mb-5">
        <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-info">

            <div class="address mt-4">
              <i class="icon-room"></i>
              <h4 class="mb-2">Location:</h4>
              <p>Meaar shaker..Tartous ,Syria..sharaa al alAdb</p>
            </div>

            <div class="open-hours mt-4">
              <i class="icon-clock-o"></i>
              <h4 class="mb-2">Open Hours:</h4>
              <p>
                Sunday-Friday:<br>
                11:00 AM - 2300 PM
              </p>
            </div>

            <div class="email mt-4">
              <i class="icon-envelope"></i>
              <h4 class="mb-2">Email:</h4>
              <p>marah@gmail.com</p>
            </div>

            <div class="phone mt-4">
              <i class="icon-phone"></i>
              <h4 class="mb-2">Call:</h4>
              <p>+ 0936 706 808</p>
            </div>

          </div>
        </div>
        @if(Session::has('messge_send'))
                            <div class="alert alert-success" role="alert">
                         {{ Session::get('messge_send') }}  
              </div>
                @endif
        <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
        <form action="{{route('contact.store')}}" method="POST"  enctype="multipart/form-data" >
                 @csrf        
            <div class="row">
              <div class="col-6 mb-3">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              <div class="col-6 mb-3">
                <input type="email" class="form-control" name="email" placeholder="Your Email">
              </div>
              <div class="col-12 mb-3">
                <input type="phone" class="form-control" name="phone" placeholder="phone">
              </div>
              <div class="col-12 mb-3">
                <textarea name="Message" id="Message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>

              <div class="col-12">
              <button type="submit" class="btn btn-danger">Submit </button>
              </div>
            </div>
            <script>
              ClassicEditor
                  .create( document.querySelector( '#Message' ) )
                  .catch( error => {
                      console.error( error );
                  } );
          </script>
          </form>
        </div>
      </div>

      
    </div>
  </div>