<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function create(User $user, Post $post):bool
    {
        return $user->role === "ADMIN" or $user->role === "WRITER";
    }
  
    public function update(User $user, Post $post):bool
    {
        return $user->id === $post->author;
    }
    public function destroy(User $user, Post $post):bool
    {
        return $user->id === $post->author;
    }
}