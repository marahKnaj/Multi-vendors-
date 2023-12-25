@include('template1.nav')

 


  <div class="pricing">
    <div class="container">
      <div class="main-heading">
        <h2>Pricing</h2>
        <p>
          Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget
          tincidunt.
        </p>
      </div>

      <div class="plans">
<!--        
        <div class="plan">
          <div class="head">
            <h3>Basic</h3>
            <span><img class="img-fluid" src="{{asset('assets/image/fashen.jpg')}}" ></span>
          </div>
          <ul>
            <li>Feature No 1</li>
            <li>Extra Feature</li>
            <li>Extra Feature No 2</li>
            <li>Feature</li>
          </ul>
          <div class="foot">
            <a href="#">Buy Now</a>
          </div>
        </div> -->
        <div class="plan">
        @foreach($product as $products)
          <div class="head">
            <h3><img class="img-fluid" src='{{asset("storage/".$products->photo)}}' width="200px"></h3>
            <span>{{$products->price}}</span>
          </div>
        
          <ul>
            <li>Feature No 1</li>
            <li>Extra Feature</li>
            <li>Extra Feature No 2</li>
            <li>Feature</li>
          </ul>
          <div class="foot">
            <!-- <a href="#">Buy Now</a> -->

            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                        @csrf
                        <input type="hidden" value="{{ $products->id }}" name="id">
                        <input type="hidden" value="{{ $products->name }}" name="name">
                        <input type="hidden" value="{{ $products->price }}" name="price">
                        <input type="hidden" value="{{ $products->photo }}"  name="photo">
                        <input type="hidden" value="1" name="quantity">
                        <button class="contact-link">buy</button>
                    </form>
                    <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data" class="flex justify-end">
                        @csrf
                        <input type="hidden" value="{{ $products->id }}" name="id">
                        <input type="hidden" value="{{ $products->name }}" name="name">
                        <input type="hidden" value="{{ $products->price }}" name="price">
                        <input type="hidden" value="{{ $products->photo }}"  name="photo">
                        <input type="hidden" value="1" name="quantity">
                        <button class="contact-link">poking</button>
                    </form>

                    <form action="{{ route('applyDiscount', [$products->id, 10]) }}" method="POST">
                      @csrf
                 <button type="submit">Discount 10%</button>
                  </form>
                    @endforeach

          </div>
        </div>
        <!-- <div class="plan">
          <div class="head">
            <h3>Pro</h3>
            <span>39</span>
          </div>
          <ul>
            <li>Feature No 1</li>
            <li>Extra Feature</li>
            <li>Extra Feature No 2</li>
            <li>Feature</li>
          </ul>
          <div class="foot">
            <a href="#">Buy Now</a>
          </div>
        </div> -->
        <!-- <div class="plan">
          <div class="head">
            <h3>Platinum</h3>
            <span>49</span>
          </div>
          <ul>
            <li>Feature No 1</li>
            <li>Extra Feature</li>
            <li>Extra Feature No 2</li>
            <li>Feature</li>
          </ul>
          <div class="foot">
            <a href="#">Buy Now</a>
          </div>
        </div> -->
      </div>
      <p class="contact-text">Contact us if you have special request</p>
      <a href="/contact" class="contact-link">Contact Us</a>
    </div>
  </div>
  @include('template1.footer')