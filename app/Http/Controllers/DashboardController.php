<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Color;
use App\Models\Block;
use App\Models\Category;
use App\Models\Priority;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = [
            'blocks' => Block::all(),
            'tasks' => Task::all(),
            'categories' => Category::all(),
            'colors' => Color::all(),
            'priorities' => Priority::all(),
        ];
        return view('dashboard', compact('data'));
    }

    public function focus()
    {
        return view('focus');
    }
}
