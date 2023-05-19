<?php

namespace App\Policies;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResumePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Resume $resume)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role->role == 'User';

    }
    public function update(User $user, Resume $resume)
    {
        return ($user->id == $resume->user_id) || ($user->role->role != 'User');
    }
    public function delete(User $user, Resume $resume)
    {
        return ($user->id == $resume->user_id) || ($user->role->role != 'User');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Resume $resume)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Resume $resume)
    {
        //
    }
}
