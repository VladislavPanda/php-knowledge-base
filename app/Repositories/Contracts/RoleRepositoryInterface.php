<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use App\Dto\RoleDto;

interface RoleRepositoryInterface
{
    /**
     * @return RoleDto[]
     */
    public function findByUser(): array;
}
