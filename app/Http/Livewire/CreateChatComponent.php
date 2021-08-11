<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class CreateChatComponent extends Component
{
    public $chattitle;
    public $chatbody;

    public function createPost()
    {
      $chatcontent = new Post();
      $chatcontent->title = $this->chattitle;
      $chatcontent->body = $this->chatbody;
      $chatcontent->user_id = Auth::user()->id;
      $chatcontent->save();
    }
    public function render()
    {
        return view('livewire.create-chat-component');
    }
}
