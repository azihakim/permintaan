<?php

namespace App\Policies;

use App\Models\Pencatatan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PencatatanPolicy
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
        return in_array($user->role, ['Observer', 'Pimpinan']);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pencatatan  $pencatatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Pencatatan $pencatatan)
    {
        //
        return in_array($user->role, ['Observer', 'Pimpinan']);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
        return $user->role === 'Observer';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pencatatan  $pencatatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Pencatatan $pencatatan)
    {
        //
        return $user->role === 'Observer';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pencatatan  $pencatatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Pencatatan $pencatatan)
    {
        //

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pencatatan  $pencatatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Pencatatan $pencatatan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pencatatan  $pencatatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Pencatatan $pencatatan)
    {
        //
    }
}
