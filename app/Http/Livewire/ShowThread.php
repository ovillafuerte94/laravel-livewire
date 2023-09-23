<?php

namespace App\Http\Livewire;

use App\Models\Thread;
use Livewire\Component;

class ShowThread extends Component
{
    public Thread $thread;

    public string $body = '';

    public function postReply()
    {
        $this->validate(['body' => 'required']);

        auth()->user()->replies()->create([
            'thread_id' => $this->thread->id,
            'body' => $this->body
        ]);

        $this->reset('body');
    }

    public function render()
    {
        return view('livewire.show-thread', [
            'replies' => $this->thread->replies()->whereNull('reply_id')->get()
        ]);
    }
}
