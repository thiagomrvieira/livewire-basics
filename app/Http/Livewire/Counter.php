<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    
    public $count = 0;
    
    /**
     *  If the render() method is just a one-line to render the default view, 
     *  you may delete that render() method from the component and it will all still work
     * */ 
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}
