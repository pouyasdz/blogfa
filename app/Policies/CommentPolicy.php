<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{

    /**
     * Determine whether the user can create models.
     */
    public function create(): bool
    {
        return auth()->guard()->check();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Comment $comment): bool
    {
        return $user->id === $comment->from;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Comment $comment, Post $post): bool
    {
        return $user->id === $comment->from or $post->id === $comment->to and $post->author === $user->id;
    }

}