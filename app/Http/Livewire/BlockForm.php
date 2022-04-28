<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Task;
use App\Models\Block;
use Livewire\Component;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class BlockForm extends Component
{
    // block form
    public string $start = '';
    public string $end = '';
    public bool $forgiven = true;

    // task form
    public string $title = '';
    public string $description = '';
    public string $note = '';
    public string $category = '';

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register(): Redirector|Application|RedirectResponse
    {
//        Block::create([
//            'starts_at' => $this->start,
//            'ends_at' => $this->end,
//            'forgiving' => $this->forgiven,
//        ]);

        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'note' => $this->note,
            'category_id' =>  Category::where('name', $this->category)->first()->id
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
