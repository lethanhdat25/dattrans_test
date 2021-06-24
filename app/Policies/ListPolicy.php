<?php

namespace App\Policies;

use App\Models\ListTable;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ListTable  $list
     * @return mixed
     */
    public function view(User $user, ListTable $list)
    {
        //
        return $user->id === $list->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ListTable  $list
     * @return mixed
     */
    public function update(User $user, ListTable $list)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ListTable  $list
     * @return mixed
     */
    public function delete(User $user, ListTable $list)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\List  $list
     * @return mixed
     */
    public function restore(User $user, ListTable $list)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ListTable  $list
     * @return mixed
     */
    public function forceDelete(User $user, ListTable $list)
    {
        //
    }
}
