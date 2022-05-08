<?php

namespace App\View\Components;

use App\Models\Status;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class QuickStats extends Component
{
    public Collection $statusNames;

    /**
     * @param $total
     * @param $difference
     */
    public function __construct(
        public $total = '71,897',
        public $difference = 22
    )
    {
        $this->statusNames = Status::select('name')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.quick-stats');
    }
}
