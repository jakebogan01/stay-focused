<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Block;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'blocks' => Block::all(),
            'tasks' => Task::all(),
        ];

        return view('dashboard')->with('data', $data);
    }
}