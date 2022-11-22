<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\Post;
use Illuminate\Support\Facades\Request;

class PostCommentController extends Controller
{
    public function store($Community_slug, Post $post) {
        $post->comments()->create([
            'user_id' => auth()->id(),
            'content' => Request::input('content'),
        ]);

        return back();  
    }
}
