<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;


    public function before($user, $ablility){

    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, Post $post){
       
    }

    public function store(User $user, Post $post){
        
    }
    public function delete(User $user, Post $post){
        
    }
    public function update(User $user, Post $post){
        
    }
}
