<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Color;
use App\Models\Block;
use App\Models\Category;
use App\Models\Priority;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'blocks' => Block::all(),
            'tasks' => Task::all(),
            'categories' => Category::all(),
            'colors' => Color::all(),
            'priorities' => Priority::all(),
        ];
        return view('dashboard')
            ->with('data', $data);
    }
}
