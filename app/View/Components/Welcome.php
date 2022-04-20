<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Welcome extends Component
{
    /**
     * @param $data
     */
    public function __construct(public $data)
    {}

    /**
     * @return View|string|Closure
     */
    public function render(): View|string|Closure
    {
        return view('vendor.jetstream.components.welcome');
    }
}
