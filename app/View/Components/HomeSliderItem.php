<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeSliderItem extends Component
{
  public string $image;
  public string $active;

  public function __construct(
    string $image,
    bool   $active = false
  )
  {
    $this->image = $image;
    $this->active = $active;
  }

  public function render(): View|Closure|string
  {
    return view('components.home-slider-item');
  }
}
