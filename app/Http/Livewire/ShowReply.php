<?php

namespace App\Http\Livewire;

use App\Models\Reply;
use Livewire\Component;

class ShowReply extends Component
{
    public Reply $reply;

    public string $body = '';

    public bool $is_creating = false;

    protected $listeners = ['refresh' => '$refresh'];

    public function postChild()
    {
        if ( ! is_null($this->reply->reply_id)) {
            return;
        }

        $this->validate(['body' => 'required']);

        auth()->user()->replies()->create([
            'reply_id' => $this->reply->id,
            'thread_id' => $this->reply->thread_id,
            'body' => $this->body
        ]);

        $this->body = '';
        $this->is_creating = false;
        $this->emitSelf('refresh');
    }

    public function render()
    {
        return view('livewire.show-reply');
    }
}
