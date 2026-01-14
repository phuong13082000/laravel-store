<div class="product-image-wrapper">
  <div class="single-products">
    <div class="productinfo text-center">
      <img src="{{$image}}" alt="{{$name}}"/>
      <h2>{{$price}}</h2>
      <p>{{$name}}</p>
      <a href="{{$addToCart}}" class="btn btn-default add-to-cart">
        <i class="fa fa-shopping-cart"></i>Add to cart
      </a>
    </div>

    <div class="product-overlay">
      <div class="overlay-content">
        <h2>{{$price}}</h2>
        <p>{{$name}}</p>
        <a href="{{$addToCart}}" class="btn btn-default add-to-cart">
          <i class="fa fa-shopping-cart"></i>Add to cart
        </a>
      </div>
    </div>

    @if($sale)
      <img src="{{asset('client/images/home/sale.png')}}" class="new" alt=""/>
    @endif
  </div>

  <div class="choose">
    <ul class="nav nav-pills nav-justified">
      <li><a href="#">
          <i class="fa fa-plus-square"></i>Add to wishlist</a>
      </li>
      <li><a href="#">
          <i class="fa fa-plus-square"></i>Add to compare</a>
      </li>
    </ul>
  </div>
</div>
