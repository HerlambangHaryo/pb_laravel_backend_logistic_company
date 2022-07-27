<?php

namespace App\View\Components\Ecaps_v120;

use Illuminate\View\Component;

class LabelForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nama;

    public function __construct($nama)
    {
        //
        $this->nama = $nama;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ecaps_v120.label-form');
    }
}
