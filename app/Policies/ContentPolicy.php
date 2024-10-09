<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;
use App\Repositories\Contracts\RoleRepositoryInterface;

class ContentPolicy
{
    public function __construct(
        private RoleRepositoryInterface $roleRepository,
    ) {
    }

    /**
     * @return bool
     */
    public function edit(): bool
    {
        $roles = $this->roleRepository->findByUser();
        dd($roles);
    }
}
