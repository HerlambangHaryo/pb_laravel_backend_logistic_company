<?php

namespace App\View\Components\Ecaps_v120;

use Illuminate\View\Component;

class RouteCreateButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $content;

    public function __construct($content)
    {
        //
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ecaps_v120.route-create-button');
    }
}
