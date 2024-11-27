<?php

declare(strict_types=1);

namespace App\Repositories\Contracts;

use App\Dto\UserDto;
use App\Models\User;

interface UserRepositoryInterface
{
    /**
     * @param string $socialId
     * @return User|null
     */
    public function findBySocialId(string $socialId): ?User;

    /**
     * @param UserDto $userDto
     * @return User
     */
    public function create(UserDto $userDto): User;

    /**
     * @return UserDto
     */
    public function findCurrentUserWithRoles(): UserDto;

    /**
     * @return int
     */
    public function findNextInsertedUserId(): int;
}
