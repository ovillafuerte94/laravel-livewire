<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Thread;
use App\Models\Category;

class ShowThreads extends Component
{
    public $search = '';

    public function render()
    {
        $categories = Category::get();
        $threads = Thread::query();
        $threads->where('title', 'like', '%' . $this->search . '%');
        $threads->withCount('replies');
        $threads->latest()->withCount('replies');

        return view('livewire.show-threads', [
            'categories' => $categories,
            'threads' => $threads->get()
        ])->layout('layouts.app');
    }
}
