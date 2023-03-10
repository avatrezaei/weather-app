<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WeatherWidget extends Component
{

    public $current;
    public $feature;
    public $location;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($current, $feature, $location)
    {
        $this->current = $current;
        $this->feature = $feature;
        $this->location = $location;
    }  

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.weather-widget');
    }
}
