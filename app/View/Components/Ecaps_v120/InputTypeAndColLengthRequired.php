<?php

namespace App\View\Components\Ecaps_v120;

use Illuminate\View\Component;

class InputTypeAndColLengthRequired extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $type;
    public $col;
    public $val;

    public function __construct($name, $type, $col, $val)
    {
        //
        $this->name = $name;
        $this->type = $type;
        $this->col = $col;
        $this->val = $val;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ecaps_v120.input-type-and-col-length-required');
    }
}
