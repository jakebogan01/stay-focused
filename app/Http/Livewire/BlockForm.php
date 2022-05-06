<?php

namespace App\Http\Livewire;

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
    // list items
    public $colors;
    public $categories;
    public $priorities;

    // block form
    public string $start = '';
    public string $end = '';

    // task form
    public string $title = '';
    public string $description = '';
    public string $note = '';
    public string $category = '';
    public string $priority = '';
    public string $color = '';
    public int $time = 60;
    public bool $moretime = true;

    // Validation on Creating a Block
    protected array $rules = [
        'start' => 'required',
        'end' => 'required',
        'title' => 'required|max:100',
        'description' => 'required|max:255',
        'note' => 'required|max:255',
        'category' =>  'required',
        'priority' =>  'required',
        'color' =>  'required',
    ];

    /**
     * @param $data
     * @return void
     */
    public function mount($data)
    {
        $this->colors = $data['colors'];
        $this->categories = $data['categories'];
        $this->priorities = $data['priorities'];
    }

    /**
     * @return void
     */
    public function updated($propertyTitle)
    {
        $this->validateOnly($propertyTitle);
    }

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register(): Redirector|Application|RedirectResponse
    {
        $this->validate();

        auth()->user()->blocks()->create([
            'starts_at' => $this->start,
            'ends_at' => $this->end,
        ]);

        auth()->user()->blocks()->first()->tasks()->create([
            'title' => $this->title,
            'description' => $this->description,
            'note' => $this->note,
            'category_id' =>  $this->categories->where('name', $this->category)->first()->id,
            'priority_id' =>  $this->priorities->where('name', $this->priority)->first()->id,
            'color_id' =>  $this->colors->where('name', $this->color)->first()->id,
            'allotted_time' =>  $this->time,
            'more_time' => $this->moretime,
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
