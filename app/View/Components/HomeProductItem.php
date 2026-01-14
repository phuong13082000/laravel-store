<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeProductItem extends Component
{
  public string $image;
  public string $price;
  public string $name;
  public string $sale;
  public string $addToCart;

  public function __construct(
    string $image,
    string $price,
    string $name,
    bool   $sale = false,
    string $addToCart = '#'
  )
  {
    $this->image = $image;
    $this->price = $price;
    $this->name = $name;
    $this->sale = $sale;
    $this->addToCart = $addToCart;
  }

  public function render(): View|Closure|string
  {
    return view('components.home-product-item');
  }
}
