<?php

namespace App\View\Components;

use Closure;
use Carbon\Carbon;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ConditionedTime extends Component
{
    public mixed $startTime = '';
    public mixed $endTime = '';
    public $moreTime = 0;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        if(auth()->user()->blocks()->first()) {
            $this->startTime = auth()->user()->blocks()->first()->starts_at;
            $time = $this->startTime;
            $time = Carbon::parse($time);

            if(auth()->user()->blocks()->first()->tasks->first()->more_time == true) {
                $this->moreTime = 15;
            }

            $this->endTime = $time->addMinutes(auth()->user()->blocks()->first()->tasks->first()->allotted_time + $this->moreTime)->format('H:i:s');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.conditioned-time');
    }
}
