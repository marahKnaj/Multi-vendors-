@include('template1.nav')
    <!-- End Header -->
    <!-- Start Landing -->
    <div class="landing">
      <div class="overlay"></div>
      <div class="text">
        <div class="content">
          <h2>
            Hello World!<br />
            We Are Kasper We Make Art.
          </h2>
          <p>
            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt
            nibh pulvinar a. Curabitur aliquet quam. Accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet
            elit, eget tincidunt.
          </p>
        </div>
      </div>
      <i class="fas fa-angle-left change-background fa-2x"></i>
      <i class="fas fa-angle-right change-background fa-2x"></i>
      <ul class="bullets">
        <li></li>
        <li class="active"></li>
        <li></li>
      </ul>
    </div> 
    <!-- End Landing -->
    <!-- Start Services -->
  
    <!-- End Services -->
    <!-- Start Design -->

    <!-- End Design -->
    <!-- Start Portfolio -->
    <div class="portfolio">
      <div class="container">
        <div class="main-heading">
          <h2>Welcom</h2>
          <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro repellat voluptate ex molestiae dignissimos cum quibusdam inventore nam esse. Temporibus, numquam. Facere, cum quo. Autem ea inventore ipsum cum repellat.
          </p>
        </div>
        
      </div>
      <div class="imgs-container">
      @foreach($productcat as $productcats)    
          <div class="box">
            <!-- <img decoding="async" src="nn.jpg" alt="" /> -->
            <img decoding="async" class="img-fluid" src="{{asset('storage/'.$productcats->photo)}}" alt="" width="250px" height="250px">
            <div class="caption">
              <a href="{{route('productStore',$productcats->id)}}"> Awesome Image</a>
              <p>{{$productcats->name}}</p>
            </div>
          </div>
          @endforeach
</div>
     
        <!-- <div class="box">
          <img decoding="async" src="nn.jpg" alt="" />
          <div class="caption">
            <h4>Awesome Image</h4>
            <p>Photography</p>
          </div>
        </div>
        <div class="box">
          <img decoding="async" src="onee.jpg" alt="" />
          <div class="caption">
            <h4>Awesome Image</h4>
            <p>Photography</p>
          </div>
        </div>
        <div class="box">
          <img decoding="async" src="three.jpg" alt="" />
          <div class="caption">
            <h4>Awesome Image</h4>
            <p>Photography</p>
          </div>
        </div>
        <div class="box">
          <img decoding="async" src="onee.jpg" alt="" />
          <div class="caption">
            <h4>Awesome Image</h4>
            <p>Photography</p>
          </div>
        </div>
        <div class="box">
          <img decoding="async" src="nn.jpg" alt="" />
          <div class="caption">
            <h4>Awesome Image</h4>
            <p>Photography</p>
          </div>
        </div>
        <div class="box">
          <img decoding="async" src="three.jpg" alt="" />
          <div class="caption">
            <h4>Awesome Image</h4>
            <p>Photography</p>
          </div>
        </div>
        <div class="box">
          <img decoding="async" src="onee.jpg" alt="" />
          <div class="caption">
            <h4>Awesome Image</h4>
            <p>Photography</p>
          </div>
        </div>
      </div> -->
    

@include('template1.footer')
 
  </body>
</html>