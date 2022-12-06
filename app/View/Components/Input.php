<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $placeholder;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$placeholder,$label)
    {
        $this->name=$name;
        $this->label=$label;   
        $this->placeholder=$placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
