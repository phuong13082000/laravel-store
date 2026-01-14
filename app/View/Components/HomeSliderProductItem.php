<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeSliderProductItem extends Component
{
  public string $image;
  public string $price;
  public string $name;
  public string $addToCart;

  public function __construct(
    string $image,
    string $price,
    string $name,
    string $addToCart = '#'
  )
  {
    $this->image = $image;
    $this->price = $price;
    $this->name = $name;
    $this->addToCart = $addToCart;
  }

    public function render(): View|Closure|string
    {
        return view('components.home-slider-product-item');
    }
}
