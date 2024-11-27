<?php

declare(strict_types=1);

namespace App\Policies;

use App\Repositories\Contracts\RoleRepositoryInterface;

abstract class BasePolicy
{
    /**
     * @var RoleRepositoryInterface
     */
    protected RoleRepositoryInterface $roleRepository;

    /**
     * @var array
     */
    protected array $roles;

    /**
     * Create a new policy instance.
     */
    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->roles = $this->roleRepository->findByUser();
    }

    /**
     * @return bool
     */
    abstract protected function edit(): bool;
}
