

@include('template2.nav')

       
  <div class="blog pt-5 pb-5">
    <div class="container">

      <div class="main-title mb-2 position-relative text-center">
        <h2 class="fw-bold lh-lg text-uppercase">latest products</h2>
      </div>

      <div class="row">
      @foreach($product as $products)
        <div class="col-md-6 col-lg-4">
          
    <section>
        <div class="content">
          <div class="card">
      <div class="card-content">
        <div class="image">
          <img  class="img-fluide" src='{{asset("storage/".$products->photo)}}' alt="" height="200px" width="100%">
        </div>
        <div class="media-icons">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-github"></i>
        </div>
        <div class="name-professional">
          <span class="name">{{$products->name}}</span>
          <span class="professional">{{$products->price}}</span>
        </div>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
        </div>
        <div class="button">
        <button class="aboutme">BUY</button>
        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                        @csrf
                        <input type="hidden" value="{{ $products->id }}" name="id">
                        <input type="hidden" value="{{ $products->name }}" name="name">
                        <input type="hidden" value="{{ $products->price }}" name="price">
                        <input type="hidden" value="{{ $products->photo }}"  name="photo">
                        <input type="hidden" value="1" name="quantity">
                        <button class="aboutme">ADD CARD</button>
                    </form>

        </div>
        <div class="button">
        <form action="{{ route('applyDiscount', [$products->id, 10]) }}" method="POST">
                      @csrf
                 <button class="aboutme">Apply 10% Discount</button>
                  </form></div>
      </div>

          </div>
        </div>
      </div>

    </section>
    @endforeach




      </div>
   
    </div>


    @include('template2.footer')