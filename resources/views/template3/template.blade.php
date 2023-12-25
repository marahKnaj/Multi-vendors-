
        @include('template3.nav')
        
        <div class="our-work text-center pt-5 pb-5">
          <div class="container">
            <div class="main-title mt-5 mb-5 position-relative">
              <img src="{{asset('assets/image/logo22.jpg')}}"alt="" width="100px" height="100px" class="mb-4">
              <h2>we make this</h2>
              <p class="text-black-50 text-uppercase">prepare to be amazed</p>
            </div>
            <ul class="list-unstyled d-flex justify-content-center mt-5 mb-5">
              <li class="active rounded-pill">all</li>
              <li>design</li>
              <li>code</li>
              <li>photo</li>
              <li>App</li>
            </ul>
            <div class="row">
            @foreach($productcat as $productcats) 
              <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
               <a href="{{route('productStore',$productcats->id)}}">   <img src="{{asset('storage/'.$productcats->photo)}}" alt="" class="img-fluid" width="100px" height="100px"></a>

                </div>
                <!-- <a href="{{route('productStore',$productcats->id)}}" >{{$productcats->name}}</a> -->

                <!-- <h4 class="text-black-50" >{{$productcats->name}}</h4> -->
              </div>
              @endforeach
              <!-- <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
                  <img src="onee.jpg" alt="" class="img-fluid" width="100px" height="100px">
                </div>
              </div>
              <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
                  <img src="three.jpg" alt="" class="img-fluid" width="100px" height="100px">
                </div>
              </div>
              <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
                  <img src="onee.jpg" alt="" class="img-fluid" width="100px" height="100px">
                </div>
              </div>
              <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
                  <img src="two.jpg" alt="" class="img-fluid" width="100px" height="100px">
                </div>
              </div>
              <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
                  <img src="twoo.jpg" alt="" class="img-fluid" width="100px" height="100px">
                </div>
              </div>
              <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
                  <img src="three.jpg" alt="" class="img-fluid" width="100px" height="100px">
                </div>
              </div>
              <div class="col-ms-6 col-md-4 col-lg-3">
                <div class="box mb-3 bg-white" data-work="application">
                  <img src="threee.jpg" alt="" class="img-fluid" width="100px" height="100px">
                </div>
              </div> -->
    
    
            </div>
            <div class="d-flex justify-content-center mt-5">
              <a href="" class="btn rounded-pill main-btn text-uppercase">I want more...</a>
            </div>
          </div>
        </div>
    
    
            </div>
            
          </div>
        </div>
        <div class="stuff pt-5">
          <div class="container">
            <div class="main-title mt-5 mb-5 position-relative text-center">
              <img src="logo2.jpg" alt="" width="100px" height="100px" class="mb-4">
              <h2>Some styff about us</h2>
              <p class="text-black-50 text-uppercase">the great time</p>
            </div>
            <p class="description text-black-50 text-center mb-5 m-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellat debitis corporis laudantium expedita, velit vero explicabo. Nam illo ad ipsam repellat debitis deleniti quaerat, doloremque doloribus aliquam obcaecati similique!</p>
    <div class="row">
      <div class="col-lg-4 mb-4 text-center text-md-start">
        <div class="text">
          <h2>Retina Design</h2>
          <p class="text-black-50 fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem iusto quo totam veniam, quia quos asperiores earum fugit ipsam libero deleniti ducimus, est laboriosam odio nobis sunt, animi culpa. Quas.</p>
          <p class="text-black-50 fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque tempore nisi molestias autem, modi veritatis, velit numquam quasi sunt maiores nulla est eos architecto enim quos? Maxime, eaque rerum.</p>
          <a href="" class="btn rounded-pill main-btn text-uppercase">Order me one</a>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="image">
          <img src="logo2.jpg" alt="" class="img-fluid">
        </div>
    
      </div>
    </div>
          </div>
         </div>
         @include('template3.footer')