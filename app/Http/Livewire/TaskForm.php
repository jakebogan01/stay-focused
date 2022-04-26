<?php

namespace App\Http\Livewire;

use App\Models\Block;
use App\Models\Task;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class TaskForm extends Component
{
    public $title = '';
    public $description = '';
    public $note = '';

    /**
     * @return Redirector|Application|RedirectResponse
     */
    public function register(): Redirector|Application|RedirectResponse
    {
        Task::create([
            'title' => $this->title,
            'description' => $this->description,
            'note' => $this->note,
        ]);

        return redirect(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.task-form');
    }
}
