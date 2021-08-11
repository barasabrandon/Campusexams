<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CreatePostComponent extends Component
{
    public $title;
    public $body;

    public function createChat()
    {
        $chat = new Post();
        $chat->title = $this->title;
        $chat->body= $this->body;
        $chat->user_id = Auth::user()->id;
        $chat->save();
        session()->flash('message', 'Chat posted Successifuly');
        return redirect()->to('/chats');
    }
    public function render()
    {
        return view('livewire.create-post-component')->layout('layouts.base');
    }
}
