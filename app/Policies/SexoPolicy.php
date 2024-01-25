<?php

namespace App\Policies;

use App\Models\Sexo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SexoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Sexo $sexo)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Sexo $sexo)
    {
    }

    public function delete(User $user, Sexo $sexo)
    {
    }

    public function restore(User $user, Sexo $sexo)
    {
    }

    public function forceDelete(User $user, Sexo $sexo)
    {
    }
}
