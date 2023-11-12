<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Post as PostModel;

class Post extends Component
{
    public PostModel $post;

    public function mount(PostModel $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.pages.post', ['post' => $this->post]);
    }
}
