@include('template2.nav')





<div class="team text-center pt-5 pb-5">
    <div class="container">
<h2 class="fw-bold">Meet the team</h2>
<p class="text-black-50 mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus a, delectus saepe velit, quaerat veritatis iste obcaecati itaque corrupti eos architecto cum culpa explicabo sed? Nesciunt cumque consectetur eligendi fugit.</p>
<div class="row">
@foreach($productcat as $productcats) 
<div class="col-md-6 col-lg-3">
  <div class="box">
   <a href="{{route('productStore',$productcats->id)}}"> <img src="{{asset('storage/'.$productcats->photo)}}" alt="" class="image-fluid" width="200px" height="200px"></a>
    <h4 class="p-2 text-light">{{$productcats->name}}</h4>
    <blockquote class="text-black-50 p-3">I DON'T UNDERSTAND ANY THING W=AWAY BUT I LOVE U VERY MUCH</blockquote>
  </div>
</div>
@endforeach
<!-- <div class="col-md-6 col-lg-3">
  <div class="box">
    <img src="nn.jpg" alt="" class="image-fluid" width="200px" height="200px">
    <h4 class="p-2 text-light">LUKE SKY WORKER</h4>
    <blockquote class="text-black-50 p-3">I DON'T UNDERSTAND ANY THING W=AWAY BUT I LOVE U VERY MUCH</blockquote>
  </div>
</div>
<div class="col-md-6 col-lg-3">
  <div class="box">
    <img src="nn.jpg" alt="" class="image-fluid" width="200px" height="200px">
    <h4 class="p-2 text-light">LUKE SKY WORKER</h4>
    <blockquote class="text-black-50 p-3">I DON'T UNDERSTAND ANY THING W=AWAY BUT I LOVE U VERY MUCH</blockquote>
  </div>
</div>
<div class="col-md-6 col-lg-3">
  <div class="box">
    <img src="nn.jpg" alt="" class="image-fluid" width="200px" height="200px">
    <h4 class="p-2 text-light">LUKE SKY WORKER</h4>
    <blockquote class="text-black-50 p-3">I DON'T UNDERSTAND ANY THING W=AWAY BUT I LOVE U VERY MUCH</blockquote>
  </div> -->
</div>
</div>
    </div>
   </div>










@include('template2.footer')