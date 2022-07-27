<?php

namespace App\View\Components\Ecaps_v120;

use Illuminate\View\Component;

class TextareaAndColLength extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name; 
    public $col;
    public $val;

    public function __construct($name, $col, $val)
    {
        //
        $this->name = $name; 
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
        return view('components.ecaps_v120.textarea-and-col-length');
    }
}
