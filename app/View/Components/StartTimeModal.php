<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StartTimeModal extends Component
{
    public $task = '';

    public function __construct()
    {
        if(auth()->user()->blocks()->first()->tasks()->first()) {
            $this->task = auth()->user()->blocks()->first()->tasks()->first()->title;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.start-time-modal');
    }
}
