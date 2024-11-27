<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Dto\RoleDto;
use App\Dto\UserDto;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryInterface
{
    /***
     * @param string $socialId
     * @return UserDto|null
     */
    public function findBySocialId(string $socialId): ?User
    {
        return User::where('social_id', $socialId)->first();
//        return $user
//            ? new UserDto(
//                $user->name,
//                $user->email,
//                $user->avatar_url,
//                $user->social_id,
//                $user->social_type,
//                $user->password
//            )
//            : null;
    }

    /**
     * @param UserDto $userDto
     * @return User
     */
    public function create(UserDto $userDto): User
    {
        return User::create([
            'name' => $userDto->getName(),
            'email' => $userDto->getEmail(),
            'social_id' => $userDto->getSocialId(),
            'avatar_url' => $userDto->getAvatarUrl(),
            'password' => bcrypt($userDto->getName() . $userDto->getSocialId()),
        ]);
    }

    /**
     * @return UserDto
     */
    public function findCurrentUserWithRoles(): UserDto
    {
        $user = Auth::user();
        $roles = $user->load('roles')->roles;

        return new UserDto(
            $user->id,
            $user->name,
            $user->email,
            $user->avatar_url,
            $user->social_id,
            $user->social_type,
            $user->password,
            $roles
                ->map(fn (Role $role) => new RoleDto($role->id, $role->name, json_decode($role->permissions, true)))
                ->toArray()
        );
    }

    /**
     * @return int
     */
    public function findNextInsertedUserId(): int
    {
        return DB::select("SHOW TABLE STATUS LIKE 'users'")[0]->Auto_increment;
    }
}
