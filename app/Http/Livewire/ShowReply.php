<?php

namespace App\Http\Livewire;

use App\Models\Reply;
use Livewire\Component;

class ShowReply extends Component
{
    public Reply $reply;

    public string $body = '';

    public bool $is_creating = false;
    public bool $is_editing = false;

    protected $listeners = ['refresh' => '$refresh'];

    public function updatedIsCreating()
    {
        $this->body = '';
        $this->is_editing = false;
    }

    public function updatedIsEditing()
    {
        $this->body = $this->reply->body;
        $this->is_creating = false;
    }

    public function updateReply()
    {
        $this->validate(['body' => 'required']);

        $this->reply->update([
            'body' => $this->body
        ]);

        $this->is_editing = false;
    }

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
