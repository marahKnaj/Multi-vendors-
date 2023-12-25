@include('template3.nav'){{asset("storage/".$products->image)}}
<div class="contain">
  <div class="row">
  @foreach($product as $products)
    <div class="col-md-6 col-lg-4">
     
      <div class="box">
        <div class="slide-img">
          <img src='' alt="1">
        <div class="overlay">
          <a href="" class="buy-btn">buy now</a>
        </div>
        </div>
        <div class="detail-box">
          <div class="type">
            <a href="">order</a>
            <span>{{$products->name}}</span>
          </div>
          <a href="" class="buy-btn">{{$products->price}}</a>
        </div>
      
      </div>





    </div>
    @endforeach
  </div>
  </div>

</div>
@include('template3.footer')