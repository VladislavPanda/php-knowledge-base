<?php

declare(strict_types=1);

namespace App\Services\Auth;

use App\Dto\UserDto;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Socialite\Contracts\User as UserSocialite;

class Google
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {
    }

    /**
     * @param UserSocialite $userSocialite
     * @return Authenticatable
     */
    public function process(UserSocialite $userSocialite): Authenticatable
    {
        $userBySocialId = $this->userRepository->findBySocialId($userSocialite->id);

        return $userBySocialId ?: $this->userRepository->create(
            new UserDto(
                $this->userRepository->findNextInsertedUserId(),
                $userSocialite->getName(),
                $userSocialite->getEmail(),
                $userSocialite->getAvatar(),
                $userSocialite->getId()
            )
        );
    }

    /**
     * @param string $email
     * @return bool
     */
    public function isAllowedEmailDomain(string $email): bool
    {
        return getenv('ALLOWED_EMAIL_DOMAIN_FOR_AUTH') === explode('@', $email)[1];
    }
}
