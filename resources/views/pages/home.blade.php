@extends('layouts.app')

@section('title', 'Home | E-Shopper')

@section('content')
  @include('includes.header')
  @include('includes.slider')

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-products-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Sportswear
                    </a>
                  </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Nike </a></li>
                      <li><a href="#">Under Armour </a></li>
                      <li><a href="#">Adidas </a></li>
                      <li><a href="#">Puma </a></li>
                      <li><a href="#">ASICS </a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Mens
                    </a>
                  </h4>
                </div>
                <div id="mens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Fendi</a></li>
                      <li><a href="#">Guess</a></li>
                      <li><a href="#">Valentino</a></li>
                      <li><a href="#">Dior</a></li>
                      <li><a href="#">Versace</a></li>
                      <li><a href="#">Armani</a></li>
                      <li><a href="#">Prada</a></li>
                      <li><a href="#">Dolce and Gabbana</a></li>
                      <li><a href="#">Chanel</a></li>
                      <li><a href="#">Gucci</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Women's
                    </a>
                  </h4>
                </div>
                <div id="womens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul>
                      <li><a href="#">Fendi</a></li>
                      <li><a href="#">Guess</a></li>
                      <li><a href="#">Valentino</a></li>
                      <li><a href="#">Dior</a></li>
                      <li><a href="#">Versace</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Kids</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Fashion</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Households</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Interiors</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Clothing</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Bags</a></h4>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="#">Shoes</a></h4>
                </div>
              </div>
            </div><!--/category-products-->

            <div class="brands_products"><!--brands_products-->
              <h2>Brands</h2>
              <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                  <li><a href="#"> <span class="pull-right">(56)</span>Greene Erode</a></li>
                  <li><a href="#"> <span class="pull-right">(27)</span>Albino</a></li>
                  <li><a href="#"> <span class="pull-right">(32)</span>Ron hill</a></li>
                  <li><a href="#"> <span class="pull-right">(5)</span>Odd molly</a></li>
                  <li><a href="#"> <span class="pull-right">(9)</span>Boudewijn</a></li>
                  <li><a href="#"> <span class="pull-right">(4)</span>which creative culture</a></li>
                </ul>
              </div>
            </div><!--/brands_products-->

            <div class="price-range"><!--price-range-->
              <h2>Price Range</h2>
              <div class="well text-center">
                <input
                  type="text"
                  class="span2"
                  value=""
                  data-slider-min="0"
                  data-slider-max="600"
                  data-slider-step="5"
                  data-slider-value="[250,450]"
                  id="sl2"
                />
                <br/>
                <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
              </div>
            </div><!--/price-range-->

            <div class="shipping text-center"><!--shipping-->
              <img src="{{asset('client/images/home/shipping.jpg')}}" alt=""/>
            </div><!--/shipping-->

          </div>
        </div>

        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>
            <div class="col-sm-4">
              <x-home-product-item
                image="{{asset('client/images/home/product1.jpg')}}"
                price="$56"
                name="Easy Polo Black Edition"
                add-to-cart="#"
              />
            </div>
            <div class="col-sm-4">
              <x-home-product-item
                image="{{asset('client/images/home/product2.jpg')}}"
                price="$56"
                name="Easy Polo Black Edition"
                add-to-cart="#"
              />
            </div>
            <div class="col-sm-4">
              <x-home-product-item
                image="{{asset('client/images/home/product3.jpg')}}"
                price="$56"
                name="Easy Polo Black Edition"
                add-to-cart="#"
              />
            </div>
            <div class="col-sm-4">
              <x-home-product-item
                image="{{asset('client/images/home/product4.jpg')}}"
                price="$56"
                name="Easy Polo Black Edition"
                add-to-cart="#"
              />
            </div>
            <div class="col-sm-4">
              <x-home-product-item
                image="{{asset('client/images/home/product5.jpg')}}"
                price="$56"
                name="Easy Polo Black Edition"
                sale="true"
                add-to-cart="#"
              />
            </div>
            <div class="col-sm-4">
              <x-home-product-item
                image="{{asset('client/images/home/product6.jpg')}}"
                price="$56"
                name="Easy Polo Black Edition"
                add-to-cart="#"
              />
            </div>
          </div><!--features_items-->

          <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
                <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
                <li><a href="#sunglass" data-toggle="tab">Sunglasses</a></li>
                <li><a href="#kids" data-toggle="tab">Kids</a></li>
                <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade active in" id="tshirt">
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery1.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery2.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery3.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery4.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
              </div>

              <div class="tab-pane fade" id="blazers">
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery4.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery3.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery2.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery1.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
              </div>

              <div class="tab-pane fade" id="sunglass">
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery3.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery4.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery1.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery2.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
              </div>

              <div class="tab-pane fade" id="kids">
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery1.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery2.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery3.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery4.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
              </div>

              <div class="tab-pane fade" id="poloshirt">
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery2.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery4.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery3.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
                <div class="col-sm-3">
                  <x-home-slider-product-item
                    image="{{asset('client/images/home/gallery1.jpg')}}"
                    price="$56"
                    name="Easy Polo Black Edition"
                    add-to-cart="#"
                  />
                </div>
              </div>
            </div>
          </div><!--/category-tab-->

          <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-sm-4">
                    <x-home-slider-product-item
                      image="{{asset('client/images/home/recommend1.jpg')}}"
                      price="$56"
                      name="Easy Polo Black Edition"
                      add-to-cart="#"
                    />
                  </div>
                  <div class="col-sm-4">
                    <x-home-slider-product-item
                      image="{{asset('client/images/home/recommend2.jpg')}}"
                      price="$56"
                      name="Easy Polo Black Edition"
                      add-to-cart="#"
                    />
                  </div>
                  <div class="col-sm-4">
                    <x-home-slider-product-item
                      image="{{asset('client/images/home/recommend3.jpg')}}"
                      price="$56"
                      name="Easy Polo Black Edition"
                      add-to-cart="#"
                    />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-4">
                    <x-home-slider-product-item
                      image="{{asset('client/images/home/recommend1.jpg')}}"
                      price="$56"
                      name="Easy Polo Black Edition"
                      add-to-cart="#"
                    />
                  </div>
                  <div class="col-sm-4">
                    <x-home-slider-product-item
                      image="{{asset('client/images/home/recommend2.jpg')}}"
                      price="$56"
                      name="Easy Polo Black Edition"
                      add-to-cart="#"
                    />
                  </div>
                  <div class="col-sm-4">
                    <x-home-slider-product-item
                      image="{{asset('client/images/home/recommend3.jpg')}}"
                      price="$56"
                      name="Easy Polo Black Edition"
                      add-to-cart="#"
                    />
                  </div>
                </div>
              </div>
              <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div><!--/recommended_items-->
        </div>
      </div>
    </div>
  </section>
  @include('includes.footer')
@endsection
