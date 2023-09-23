<?php

namespace App\Http\Livewire;

use App\Models\Reply;
use Livewire\Component;

class ShowReply extends Component
{
    public Reply $reply;

    public string $body = '';

    public function postChild()
    {
        $this->validate(['body' => 'required']);

        auth()->user()->replies()->create([
            'reply_id' => $this->reply->id,
            'thread_id' => $this->reply->thread_id,
            'body' => $this->body
        ]);

        $this->body = '';
    }

    public function render()
    {
        return view('livewire.show-reply');
    }
}
