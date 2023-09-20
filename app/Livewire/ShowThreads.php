<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Thread;
use App\Models\Category;

class ShowThreads extends Component
{
    public function render()
    {
        $categories = Category::get();
        $threads = Thread::latest()->get();

        return view('livewire.show-threads', [
            'categories' => $categories,
            'threads' => $threads
        ])->layout('layouts.app');
    }
}
