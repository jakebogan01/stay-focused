<?php

namespace App\Http\Livewire;

use App\Models\Block;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class BlockForm extends Component
{
    public $start = '';
    public $end = '';
    //    1 by default
    public $forgiven = true;

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register(): Redirector|Application|RedirectResponse
    {
        Block::create([
            'starts_at' => $this->start,
            'ends_at' => $this->end,
            'forgiving' => $this->forgiven,
        ]);

        return redirect(route('dashboard'));
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.block-form');
    }
}
