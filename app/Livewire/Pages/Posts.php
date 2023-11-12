<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        $posts = Post::where('published_at', '<', today())->orderBy('published_at', 'desc')->paginate(4);

        return view('livewire.pages.posts', compact('posts'));
    }
}
