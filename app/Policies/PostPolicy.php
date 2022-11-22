<?php

namespace App\Policies;

use App\Models\TopSection;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, TopSection $post)
    {
        //
    }


    public function create(User $user)
    {
        //
    }


    public function update(User $user, TopSection $post)
    {
        //
    }


    public function delete(User $user, TopSection $post)
    {
        //
    }


    public function restore(User $user, TopSection $post)
    {
        //
    }

    public function forceDelete(User $user, TopSection $post)
    {
        //
    }
}
