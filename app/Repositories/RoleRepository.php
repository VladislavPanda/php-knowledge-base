<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Dto\RoleDto;
use App\Models\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class RoleRepository implements RoleRepositoryInterface
{
    /**
     * @return RoleDto[]
     */
    public function findByUser(): array
    {
        return Auth::user()
            ->roles
            ->map(fn (Role $role) => new RoleDto($role->id, $role->name, json_decode($role->permissions, true)))
            ->toArray();
    }
}
